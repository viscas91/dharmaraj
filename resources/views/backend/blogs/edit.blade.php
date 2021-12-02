@extends('layouts.admin')

@section('content')
    <div class="mx-auto p-6">
        <div class="md:grid md:grid-cols-1 md:gap-6 max-w-2xl mx-auto">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0 text-center">
                    <h3 class="text-4xl uppercase mb-3 font-medium leading-6 text-gray-900">Edit Blog</h3>
                    <p class="mt-1 text-md text-gray-600">
                        This blog will be displayed at /blogs.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-1">
                <form action="{{ route('blogs.update', $blog->id) }}" method="POST" class="border rounded border-gray-300"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                Title
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm w-full">
                                <input type="text" name="title" id="title"
                                    class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                    placeholder="Title" value="{{ $blog->title }}">
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">
                                    Description
                                </label>
                                <div class="mt-1">
                                    <textarea id="richtext" name="description" rows="12" cols="40"
                                        class="shadow-md focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-black-500 p-3 rounded-md"
                                        placeholder="Description">{!!  $blog->description !!}</textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your blog. URLs are hyperlinked.
                                </p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Upload Image
                                </label>
                                <div
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload"
                                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="image" name="image" type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 text-sm text-gray-500 w-16">
                                    <img id="image_preview"
                                        src="{{ asset('storage/blogs/' . $blog->id . '/' . $blog->image) }}"
                                        alt="{{ $blog->title }}">
                                </div>
                            </div>

                            <div>
                                <label class="inline-flex text-sm mr-2 font-medium text-gray-700">
                                    Is Published?
                                </label>
                                <div class="mt-2 inline-flex">
                                    <input type="checkbox" id="publish" name="is_published"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        {{ $blog->is_published ? 'checked' : '' }}>
                                </div>
                            </div>

                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Update
                                </button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
