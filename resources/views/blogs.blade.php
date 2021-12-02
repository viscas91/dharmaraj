@extends('layouts.appLayout')

@section('content')
    <section id="section-blogs">
        <div class="blogHeader w-full p-6 flex justify-center items-center">
            <p class='text-4xl font-bold uppercase text-white'>Blogs</p>
        </div>

        <div class="container mt-5">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-9 grid grid-cols-3 gap-3">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="aspect-w-16 aspect-h-9">
                            <img class="w-full" src="https://images.unsplash.com/photo-1604537466158-719b1972feb8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" alt="Sunset in the mountains">
                        </div>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>

                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="image-wrapper">
                            <img class="w-full" src="https://images.unsplash.com/photo-1568812315803-7f6419ff8d3e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGxhY2VzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Sunset in the mountains">
                        </div>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>


                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>

                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                    </div>


                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                                et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                    </div>
                </div>

                <div class="col-span-3 p-3">
                    <p class="text-xl uppercase mb-3">Categories</p>
                    <div class="divide-y divide-gray-500">
                        <div class="p-3">1</div>
                        <div class="p-3">2</div>
                        <div class="p-3">3</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
