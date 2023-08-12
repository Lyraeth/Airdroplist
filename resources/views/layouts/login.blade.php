<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    {{-- Favicons --}}
    <link type="image/png" sizes="96x96" rel="icon" href="{{ asset('favicons.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- Bootstrap CSS & Fontawasome CSS & Data AOS & Datatables --}}
    <link rel="stylesheet" href="{{ asset('assets/Bootstrap-5.3/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Fontawasome-6.3/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Data-aos/src/sass/aos.scss') }}">
    <link rel="stylesheet" href="{{ asset('assets/DataTables/datatables.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        {{-- <div>
            <a href="/">
                <img src="{{ asset('logo.png') }}" alt="" width="120" height="120">
            </a>
        </div> --}}

        <div class="container d-flex justify-content-center align-items-center vh-100">
            {{ $slot }}
        </div>
    </div>

    {{-- Bootstraps JS & Fontawasome JS & Data AOS & Datatables --}}
    <script src="{{ asset('assets/Bootstrap-5.3/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Fontawasome-6.3/js/all.js') }}"></script>
    <script src="{{ asset('assets/Data-aos/src/js/aos.js') }}"></script>
    <script src="{{ asset('assets/DataTables/datatables.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example');
    </script>


    {{-- Data-AOS --}}
    <script>
        AOS.init();
    </script>

    {{-- Bootstrap Validation --}}
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>
