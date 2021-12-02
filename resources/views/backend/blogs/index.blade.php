@extends('layouts.admin')

@section('content')

    @if (count($blogs) > 0)
        <div class="mx-auto p-6 border border-grey-500">
            <div class="px-4 sm:px-0 text-center">
                <h3 class="text-4xl mb-3 font-medium leading-6 text-gray-900">Blogs</h3>
                <p class="mt-1 text-md text-gray-600">
                    List of all blogs.
                </p>
            </div>

            <form id="deletemultiple" action="{{ route('delBlogs') }}" method="POST">
                @csrf
                @method('DELETE')

                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                    <div
                        class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                        <div class="flex justify-between">

                            <div class="flex">
                                <button type="submit"
                                    class="inline-flex items-center mr-3 uppercase justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none">
                                    Delete Selected
                                </button>

                                <a href="{{ route("blogs.create") }}"
                                class="inline-flex items-center uppercase justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-sm text-white bg-green-500 hover:bg-green-600 hover:text-white focus:outline-none">
                                    Create Blog
                                </a>
                            </div>

                            <div class="inline-flex border rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">
                                <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                                    <input type="text"
                                        class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none rounded rounded-l-none px-3 relative focus:outline-none focus:border-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin"
                                        placeholder="Search">
                                    
                                    <div class="flex">
                                        <button type="submit"
                                            class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                            <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"
                                                    stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                        <input id="table__sacb" type="checkbox" type="checkbox" name="sacb"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    </th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                        ID</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Edit</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Image</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Title</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Description</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Is Published?</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap text-blue-900 border-gray-500 text-sm leading-5">
                                            <input form="deletemultiple" type="checkbox" value="{{$blog->id}}" name="cbd[]"
                                                class="table__icb rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm leading-5 text-gray-800">{{ $blog->id }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-no-wrap border-gray-500 text-sm leading-5">
                                            <a href="{{ route('blogs.edit', $blog->id) }}"
                                                class="px-5 py-2 border text-white rounded transition duration-300 bg-yellow-500 hover:bg-white hover:text-yellow-500 focus:outline-none">Edit</a>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap text-blue-900 border-gray-500 text-sm leading-5">
                                            <img style="width: 150px;" class="table__imagecell-pic"
                                                src="{{ asset('storage/blogs/' . $blog->id . '/' . $blog->image) }}"
                                                alt="some image" />
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap text-blue-900 border-gray-500 text-sm leading-5">
                                            {{ substr_replace($blog->title, '...', 20) }}</td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap text-blue-900 border-gray-500 text-sm leading-5">
                                            {{ substr_replace($blog->description, '...', 20) }}</td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-gray-500 text-blue-900 text-sm leading-5">
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-white leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 {{ $blog->is_published == 1 ? 'bg-green-500' : 'bg-red-500' }} opacity-70 rounded-full"></span>
                                                <span
                                                    class="relative text-xs">{{ $blog->is_published == 1 ? 'Published' : 'Not Published' }}</span>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
            </form>

            <div class="py-5">
                {{ $blogs->links() }}
            </div>
        </div>
    @else

        <div class="h-screen flex flex-col justify-center item-center">
            <div class="px-4 sm:px-0 text-center mb-5">
                <h3 class="text-2xl font-medium leading-6 text-gray-900">No blogs found.</h3>
            </div>
            <div class="px-4 sm:px-0 text-center">
                <a href="{{ route('blogs.create') }}"
                    class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Create
                    Blog</a>
            </div>
        </div>

    @endif



@endsection

@section('scripts')

@endsection
