@extends('layouts.appLayout')

@section('content')
    <section id="section-about" class="">
        <div class="aboutHeader w-full p-6 flex justify-center items-center">
            <p class='text-4xl font-bold uppercase text-white'>About</p>
        </div>

        <div>
        <div class="max-w-7xl mx-auto py-14 px-4 sm:px-6 lg:px-8">
            <div class="flex">
                <div class="w-1/2 px-6">
                    <img src="{{ asset('images/dharmaraj.jpg') }}" alt="">
                </div>
                <div class="w-1/2 px-6">
                    <p class="text-lg mb-4">
                        Dharmaraj practices law primarily in litigation side. He handles commercial
                        litigations, criminal matters, arbitration, writ matters and recovery proceedings. He
                        appears for clients before Bombay High Court, Bombay City Civil and Sessions Court
                        and National Company Law Tribunals.
                    </p>
                    <p class="text-lg mb-4">
                        Tata Power Trading Company Limited, Unity Infraprojects Limited, Wirecard Forex
                        India Private Limited, Avarsekar &amp; Sons Private Limited, Fugro Survey India Private
                        Limited, Indoco Remedies Limited, ATPI India Private Limited, Spares Pazari FZ LLE,
                        UAE, MU P.C., California, Offshore Engineering Design &amp; Energy Consultants Private
                        Limited, Abhyudaya Cooperative Bank Limited, Citizen Credit Cooperative Bank Limited
                        are some of the entities whom he has represented and worked for.
                    </p>
                    <p class="text-lg mb-4">
                        He holds Bachelor of Technology (Honors) from Indian Institute of Technology,
                        Kharagpur and LLB from University of Rajasthan.
                    </p>

                    <p class="text-lg font-semibold">Phone: <span class="font-light">123456789</span></p>
                    <p class="text-lg font-semibold">Email: <span class="font-light">dharmaraj@gmail.com</span></p>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
