<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9c45e3d696.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @yield('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <title>Admin Panel</title>
</head>

<body>
    <div>
        <div class="w-64 fixed h-screen bg-gray-800 mt-8 sm:mt-0 md:col-span-1">
            <div class="flex items-center justify-center mt-10">
                <p class="text-white text-lg font-medium">Admin Panel</p>
            </div>

            <nav class="mt-10">
                <a class="flex items-center py-2 px-8 hover:bg-gray-700 text-md text-gray-100 border-gray-100 mx-4 font-light"
                    href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                <a class="flex items-center mt-5 py-2 px-8 text-gray-400 border-gray-800 hover:bg-gray-700 hover:text-gray-100  mx-4 font-light"
                    href="{{ route('blogs.index') }}">
                    Blogs
                </a>

                <a class="flex items-center mt-5 py-2 px-8 text-gray-400 border-gray-800 hover:bg-gray-700 hover:text-gray-100 hover:border-gray-100 mx-4 font-light"
                    href="">
                    Profile
                </a>
            </nav>
        </div>


        <div class="ml-64">
            @yield('content')
        </div>
    </div>

    <script>
        $('#richtext').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 200,
            dialogsInBody: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>

    <script>
        let tableCB = document.getElementById("table__sacb");
        let Icb = document.getElementsByClassName("table__icb");

        if (!!tableCB) {
            tableCB.onclick = function() {
                checkAllCheckbox()
            };

            function checkAllCheckbox() {
                if (tableCB.checked) {
                    Array.from(Icb).forEach(c => {
                        c.checked = true;
                    });
                } else {
                    Array.from(Icb).forEach(c => {
                        c.checked = false;
                    });
                }
            }
        }
    </script>

    <script>
        if (document.getElementById("image")) {
            var el = document.getElementById('image');

            el.onchange = function() {
                var value = el.value;
                var filename = value.split("\\").pop();

                document.getElementById("file__helptext").innerHTML = "Selected File: " + filename;
            }
        }
    </script>

    @yield('scripts')
</body>

</html>
