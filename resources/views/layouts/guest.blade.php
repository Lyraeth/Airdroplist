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

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/Bootstrap-5.3/css/bootstrap.min.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <img src="{{ asset('logo.png') }}" alt="" width="120" height="120">
            </a>
        </div>

        <div class="card">
            <div class="w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>

    {{-- Script Disable Login Button --}}
    <script>
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const loginButton = document.getElementById('login-button');

        function toggleLoginButton() {
            if (emailInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
                loginButton.removeAttribute('disabled');
            } else {
                loginButton.setAttribute('disabled', 'disabled');
            }
        }

        emailInput.addEventListener('input', toggleLoginButton);
        passwordInput.addEventListener('input', toggleLoginButton);
    </script>

    {{-- Script Disbale Register Button --}}
    <script>
        const nameInput = document.getElementById('nameReg');
        const emailRegInput = document.getElementById('emailReg');
        const passwordRegInput = document.getElementById('passwordReg');
        const passwordConfirmationInput = document.getElementById('password_confirmation');
        const registerButton = document.getElementById('register-button');

        function toggleRegisterButton() {
            if (nameInput.value.trim() !== '' && emailRegInput.value.trim() !== '' &&
                passwordRegInput.value.trim() !== '' && passwordConfirmationInput.value.trim() !== '') {
                registerButton.removeAttribute('disabled');
            } else {
                registerButton.setAttribute('disabled', 'disabled');
            }
        }

        nameInput.addEventListener('input', toggleRegisterButton);
        emailRegInput.addEventListener('input', toggleRegisterButton);
        passwordRegInput.addEventListener('input', toggleRegisterButton);
        passwordConfirmationInput.addEventListener('input', toggleRegisterButton);
    </script>

    {{-- Script Clock --}}
    <script>
        // Fungsi untuk mengupdate jam setiap detik
        function updateClock() {
            const clockElement = document.getElementById('clock');
            const now = new Date();

            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');

            const timeString = `${hours}:${minutes}:${seconds}`;
            clockElement.textContent = timeString;
        }

        // Memanggil fungsi updateClock setiap detik
        setInterval(updateClock, 1000);

        // Memanggil fungsi updateClock secara langsung saat halaman dimuat
        updateClock();
    </script>
</body>

</html>
