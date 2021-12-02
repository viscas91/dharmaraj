@extends('layouts.appLayout')

@section('content')
{{-- <section id="section-hero" class="flex flex-col h-screen justify-center items-center">
    <h1 class="text-6xl text-white mb-3">Dharamraj Chandel</h1>
    <p class="text-xl text-white uppercase">Criminal Lawyer</p>
</div> --}}

    <section id="section-hero" class="flex h-screen justify-center items-center">
        <div class="w-2/5 px-10 h-full bg-purple-400">
            <div class="max-w-7xl px-4 sm:px-6 lg:px-8 absolute top-2/4 left-0 right-0 mx-auto -translate-y-1/2">
                <p class="text-2xl text-white px-1">Hello,</p>
                <h1 class="text-6xl text-white mb-3 font-bold my-6 tracking-tight">I'm Dharamraj Chandel</h1>
                <p class="text-2xl text-white fw-medium px-1">A Corporate Lawyer</p>
            </div>
        </div>

        <div class="w-3/5 aImage"></div>
    </section>

    <section id="section-services" class="py-24">
        <p class="text-lg text-center uppercase mb-1">Services</p>
        <p class="text-3xl text-center font-medium mb-14">My Legal Practice Areas</p>

        <div class="flex max-w-7xl mx-auto">
            <div class="flex-1 p-3 text-center">
                <div class="bg-gray-700 w-28 rounded-full p-5 mb-4 mx-auto">
                    <img class="w-full" src="{{ asset('images/svg/litigation2.svg') }}" alt="Commercial Litigation">
                </div>

                <p class="text-lg uppercase mb-2">Commercial Litigation</p>

                <p class="text-base text-gray-500">
                    Commercial litigation is a broad term that describes virtually every type of dispute that may arise in a business context.
                </p>
            </div>
            <div class="flex-1 p-3 text-center">
                <div class="bg-gray-700 w-28 rounded-full p-5 mb-4 mx-auto">
                    <img src="{{ asset('images/svg/crime2.svg') }}" alt="Criminal Matters">
                </div>

                <p class="text-lg uppercase mb-2">Criminal Matters</p>

                <p class="text-base text-gray-500">
                    Criminal law is a broad area of law that covers issues arising from police arrest and investigation, based on the suspicion of criminal activity.
                </p>
            </div>
            <div class="flex-1 p-3 text-center">
                <div class="bg-gray-700 w-28 rounded-full p-5 mb-4 mx-auto">
                    <img src="{{ asset('images/svg/arbitration.svg') }}" alt="Arbitration">
                </div>

                <p class="text-lg uppercase mb-2">Arbitration</p>

                <p class="text-base text-gray-500">
                    Arbitration is a procedure in which a dispute is submitted, by agreement of the parties, to one or more arbitrators who make a binding decision on the dispute.
                </p>
            </div>
            <div class="flex-1 p-3 text-center">
                <div class="bg-gray-700 w-24 rounded-full p-6 mb-4 mx-auto">
                    <img src="{{ asset('images/svg/writ.svg') }}" alt="Writ Matters">
                </div>

                <p class="text-lg uppercase mb-2">Writ Matters</p>

                <p class="text-base text-gray-500">
                    Writ refers to a formal, legal document that orders a person or entity to perform or to cease performing a specific action or deed.
                </p>
            </div>
            <div class="flex-1 p-3 text-center">
                <div class="bg-gray-700 w-28 rounded-full p-5 mb-4 mx-auto">
                    <img src="{{ asset('images/svg/recovery.svg') }}" alt="Recovery">
                </div>

                <p class="text-lg uppercase mb-2">Recovery Proceedings</p>

                <p class="text-base text-gray-500">
                    The action or process of regaining possession or control of something stolen or lost.
                </p>
            </div>
        </div>
    </section>

    <section id="section-vision">
        <div class="flex">

        </div>
    </section>
@endsection
