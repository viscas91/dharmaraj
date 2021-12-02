<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Session;

use Intervention\Image\ImageManagerStatic as Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('backend.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $title = $request->title;
        $slug = Str::slug($title);
        $i = $request->file('image');
        $name = time() . $string = str_replace(' ', '', $i->getClientOriginalName());

        $is_published = $request->is_published === "on" ? 1 : 0 ;

        $blog = Blog::create(['title' => $title, 'slug' => $slug, 'image' => $name, 'is_published' => $is_published]);

        $i->storeAs('public/blogs/'. $blog->id . '/', $name);

        $d = $request->description;

        $dom = new \DomDocument();
        @$dom->loadHtml($d, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        // foreach <img> in the submited message
        foreach($images as $img){
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){

                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                // Generating a random filename
                $filename = uniqid();
                $filepath = "/images/$filename.$mimetype";

                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                  // resize if required
                  /* ->resize(300, 200) */
                  ->encode($mimetype, 100)  // encode file to the specified mimetype
                  ->save(public_path($filepath));

                if(File::isDirectory(storage_path('app/public/blogs/'. $blog->id . '/images/')) === false) {
                    File::makeDirectory(storage_path('app/public/blogs/'. $blog->id . '/images/'));
                }
                File::move(public_path('images/'. $filename. '.' . $mimetype), storage_path('app/public/blogs/'. $blog->id . '/images/' . $filename. '.' .$mimetype));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', '/storage/blogs/'. $blog->id . '/images/' . $filename. '.' .$mimetype);
            } // <!--endif
        } // <!--endforeach

        $desc = $dom->saveHTML();

        $b = Blog::findOrFail($blog->id);
        $b->description = $desc;
        $b->save();

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('backend.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $d = $request->description;

        $dom = new \DomDocument();
        @$dom->loadHtml($d, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        // foreach <img> in the submited message
        foreach($images as $img){
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){

                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                // Generating a random filename
                $filename = uniqid();
                $filepath = "/images/$filename.$mimetype";

                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                  // resize if required
                  /* ->resize(300, 200) */
                  ->encode($mimetype, 100)  // encode file to the specified mimetype
                  ->save(public_path($filepath));

                if(File::isDirectory(storage_path('app/public/blogs/'. $blog->id . '/images/')) === false) {
                    File::makeDirectory(storage_path('app/public/blogs/'. $blog->id . '/images/'));
                }
                File::move(public_path('images/'. $filename. '.' . $mimetype), storage_path('app/public/blogs/'. $blog->id . '/images/' . $filename. '.' .$mimetype));

                $new_src = asset($filepath);
                echo $new_src;
                $img->removeAttribute('src');
                $img->setAttribute('src', '/storage/blogs/'. $blog->id . '/images/' . $filename. '.' .$mimetype);
            } // <!--endif
        } // <!--endforeach

       $desc = $dom->saveHTML();

        if(trim($request->image == "")){
            $title = $request->title;
            $slug = Str::slug($title);
            $description = $desc;
            $is_published = $request->is_published === "on" ? 1 : 0 ;
            $image = $request->except('image');

            $blog->update(['title' => $title, 'slug' => $slug, 'description' => $description, 'is_published' => $is_published ]);
        } else {
            $title = $request->title;
            $slug = Str::slug($title);
            $description = $desc;
            $is_published = $request->is_published === "on" ? 1 : 0 ;

            $file = new Filesystem;

            $file->cleanDirectory('storage/blogs/'.$blog->image);
            $image = $request->file('image');

            $imagename = time() . $image->getClientOriginalName();
            $image->storeAs('public/blogs/'. $blog->id . '/', $imagename);

            $blog->update([ 'title' => $title, 'slug' => $slug, 'description' => $description, 'is_published' => $is_published, 'image' => $imagename ]);
        }

        Session::flash('updated_blog', 'Blog has been updated');

        return redirect(route('blogs.edit', $blog->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $file = new Filesystem;

        // $file->cleanDirectory('storage/blog/'.$blog->id);

        File::deleteDirectory('storage/blogs/'. $blog->id . '/' .$blog->image);

        $blog->delete();

        Session::flash('deleted_blog', 'Blog has been deleted.');

        return redirect('/admin/blogs');
    }

    public function delBlogs(Request $request)
    {
        if($request->cbd){

            foreach($request->cbd as $key => $value){
               //echo Category::find($value);

            $file = new Filesystem;

            $file->cleanDirectory('storage/blogs/'.$value);

            File::deleteDirectory('storage/blogs/'.$value);

            }

            Blog::destroy($request->cbd);

            return back();

        }
    }

}
