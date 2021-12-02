@extends('layouts.appLayout')

@section('content')
    <section id="section-blogs">
        <div class="blogHeader w-full p-6 flex justify-center items-center">
            <p class='text-4xl font-bold uppercase text-white'>Blogs</p>
        </div>

        <div class="container mt-5">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-9 flex flex-col">
                    <p class="text-4xl mb-3">title of some random blog</p>


                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius, mauris sit amet accumsan pulvinar, turpis dolor rhoncus lectus, vitae porttitor tellus urna at mauris. Aliquam rhoncus sem ut dapibus venenatis. Praesent vel turpis enim. Nullam vel orci quis mi commodo gravida sit amet sed erat. In consequat eros augue, sit amet maximus nunc cursus a. Fusce egestas leo sit amet purus vulputate egestas. Aenean congue, ante at efficitur eleifend, elit odio sodales orci, at feugiat nibh ligula ac tellus.

                            Cras imperdiet orci eu lorem semper faucibus. Quisque quis turpis justo. Fusce in pulvinar metus. In pharetra a orci eu semper. Cras eget metus eros. Suspendisse vel aliquet enim. Nullam consequat porttitor dui id maximus. Curabitur vitae ultrices eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur id ex nunc. In at nisi at leo facilisis dignissim et nec massa. Donec sit amet libero sed est vulputate egestas in sed est.

                            Cras eget lectus vitae nunc interdum tempus ac vel ex. In est erat, ornare nec massa vitae, rhoncus porta sapien. Donec mattis posuere ligula, a varius odio. Donec dapibus ipsum eget facilisis elementum. Phasellus rutrum orci eros. Aenean scelerisque diam elit, in varius urna bibendum suscipit. Maecenas feugiat est vitae nulla laoreet, lobortis dapibus nulla mollis. Cras vel nisi porta, luctus enim et, venenatis purus. Sed efficitur, quam nec eleifend fringilla, nisl nulla tincidunt mauris, at auctor nisl libero id lacus. Nunc posuere leo nibh, non fermentum diam feugiat in. Quisque tincidunt sem vel massa aliquet, in fermentum turpis imperdiet. Fusce tristique, lacus non lobortis lobortis, diam ipsum imperdiet augue, a dapibus turpis felis vitae dolor. Nunc luctus interdum justo quis interdum. Vestibulum sit amet pulvinar felis, sed pellentesque turpis.

                            Sed faucibus nulla nibh, id finibus erat viverra a. Interdum et malesuada fames ac ante ipsum primis in faucibus. In consequat leo a lorem tristique semper. Nunc a lacus feugiat, varius lectus in, volutpat ex. Ut consectetur lorem lectus, eu lacinia dolor luctus eu. Morbi mi nunc, interdum ut justo id, aliquam dapibus tellus. Vivamus tempor dignissim mi, nec condimentum ex molestie ac. Donec mollis mauris sed libero mattis suscipit. Donec placerat nec leo in rutrum. Curabitur sollicitudin mi mi, vel dapibus neque luctus at. Nulla ligula nunc, fermentum vitae dolor et, fermentum maximus lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut facilisis est, vel lacinia leo. Proin sit amet mi sit amet augue molestie consequat in nec turpis.

                            Sed sollicitudin turpis id pulvinar mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in aliquam lorem. Cras nec facilisis massa. Morbi in quam lacus. Nam in vulputate ex. Duis sit amet sollicitudin elit, eget posuere neque. Vivamus sed orci vitae libero cursus bibendum.</p>

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
