<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="row justify-content-md-center">

        {{-- Kotak Kiri --}}
        <div class="col col-md-6">

            {{-- Atas --}}
            <div class="flex items-center justify-center my-6">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Airdroplist') }}
                </h1>
            </div>

            {{-- Tengah --}}
            <div class="flex items-center justify-center">
                <img src="{{ asset('welcome-bg.png') }}" alt="Logo" width="120" height="120">
            </div>

            {{-- Bawah --}}
            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-800 dark:text-gray-800 sm:text-left">
                    <div class="flex items-center gap-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('register') }}">
                                {{ __("Doesn't have an account?") }}
                            </a>
                        @endif
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-800 dark:text-gray-800 sm:text-right sm:ml-0">
                    <p>Copyright &copy 2023 <strong>Tres Idiotas ⚜</strong></p>
                </div>
            </div>
        </div>

        {{-- Kotak Kanan --}}
        <div class="col col-md-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex items-center justify-center my-4">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Login') }}
                    </h1>
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <input id="email" class="block mt-1 w-full rounded" type="email" name="email"
                        :value="old('email')" autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <input id="password" class="block mt-1 w-full rounded" type="password" name="password"
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button id="login-button" class="btn btn-accent ml-3" disabled>
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
