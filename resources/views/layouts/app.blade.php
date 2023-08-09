<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    {{-- Bootstraps JS & Fontawasome JS & Data AOS & Datatables --}}
    <script src="{{ asset('assets/Bootstrap-5.3/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Fontawasome-6.3/js/all.js') }}"></script>
    <script src="{{ asset('assets/Data-aos/src/js/aos.js') }}"></script>
    <script src="{{ asset('assets/DataTables/datatables.js') }}"></script>

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

    {{-- Confirm Delete Wallet --}}
    <script>
        function confirmDeleteWallet(walletId) {
            if (confirm("Are you sure want to delete this wallet?")) {
                // Jika pengguna mengklik "OK" dalam konfirmasi, submit form dengan ID yang sesuai
                document.getElementById("deleteFormWallet" + walletId).submit();
            }
        }
    </script>

    {{-- Confirm Delete Airdrops --}}
    <script>
        function confirmDeleteAirdrop(airdropId) {
            if (confirm("Are you sure want to delete this airdrop?")) {
                // Jika pengguna mengklik "OK" dalam konfirmasi, submit form dengan ID yang sesuai
                document.getElementById("deleteFormAirdrop" + airdropId).submit();
            }
        }
    </script>

</body>

</html>
