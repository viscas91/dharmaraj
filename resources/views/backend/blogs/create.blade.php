@extends('layouts.admin')

@section('content')
    <div class="mx-auto p-6">
        <div class="md:grid md:grid-cols-1 md:gap-6 max-w-2xl mx-auto">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0 text-center">
                    <h3 class="text-4xl mb-3 uppercase font-medium leading-6 text-gray-900">Create Blog</h3>
                    <p class="mt-1 text-md text-gray-600">
                        This blog will be displayed at /blogs.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-1">
                <form action="{{ route('blogs.store') }}" method="POST" class="border rounded border-gray-300"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                Title
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm w-full">
                                <input type="text" name="title" id="title"
                                    class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-none rounded-md sm:text-sm border-2 border-gray-300"
                                    placeholder="Title">
                            </div>


                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">
                                    Description
                                </label>
                                <div class="mt-1">
                                    <textarea id="richtext" name="description" rows="12" cols="40"
                                        class="shadow-md focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-black-500 p-3 rounded-md"
                                        placeholder="Description"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your blog. URLs are hyperlinked.
                                </p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Upload Image
                                </label>
                                <input type="file" name="image" id="image"
                                    class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-none rounded-md sm:text-sm border-2 border-gray-300"
                                    placeholder="Upload header image">
                            </div>

                            <div>
                                <label class="inline-flex text-sm mr-2 font-medium text-gray-700">
                                    Is Published?
                                </label>
                                <div class="mt-2 inline-flex">
                                    <input type="checkbox" id="publish" name="is_published"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                            </div>

                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
