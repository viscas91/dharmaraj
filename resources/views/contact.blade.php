@extends('layouts.appLayout')

@section('content')
    <section id="section-contact">
        <div class="contactHeader w-full p-6 flex justify-center items-center">
            <p class='text-4xl font-bold uppercase text-white'>Contact</p>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-2xl text-center mt-5 mb-5">Stop wasting time and reach us out.</p>

            <div class="p-3 mb-4">
                <iframe class="w-full h-72 mx-auto" title="Google Map"
                    src="https://media.wired.com/photos/59269cd37034dc5f91bec0f1/191:100/w_1280,c_limit/GoogleMapTA.jpg"
                    frameborder="0"></iframe>
            </div>

            <div class="flex justify-center items-center mb-10">
                <div class="flex-1">
                    <p class="text-lg text-center">
                        102, Birya House,<br />
                        Fort, Mumbai – 400 001
                    </p>
                </div>
                <div class="flex-1">
                    <p class="text-lg text-center">
                        +91-9619792804
                    </p>
                </div>
                <div class="flex-1">
                    <p class="text-lg text-center">
                        Legal@dharmaraj.co.in
                    </p>
                </div>
            </div>

            <div class="p-24">
                <p class="text-xl text-center uppercase mb-2">Services</p>
                <p class="text-4xl font-bold text-center mb-12">Get In Touch</p>

                <form action="{{ route('mail') }}" method="POST">
                    @csrf
                    <div class="flex mb-4">
                        <div class="flex-1 px-2">
                            <input class="rounded w-full" type="text" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="flex-1 px-2">
                            <input class="rounded w-full" type="email" name="email" id="email" placeholder="Email Address">
                        </div>
                        <div class="flex-1 px-2">
                            <input class="rounded w-full" type="text" name="subject" id="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="px-2 w-full mb-2">
                        <textarea class="w-full" name="message" id="message" cols="30" rows="10"
                            placeholder="Message"></textarea>
                    </div>

                    <div class="px-2">
                        <input
                            class="px-4 py-3bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                            type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
