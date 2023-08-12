<x-login-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container-fluid d-flex justify-content-center align-items-center">

        <div class="row border rounded-5 p-5 bg-white shadow mx-auto">

            {{-- Left Login --}}
            <div class="col-lg-6 login-left d-flex flex-column justify-content-between">
                <div class="text-left">
                    <p class="fs-5">Welcome!</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('welcome-bg.png') }}" class="img-fluid" width="250px">
                </div>
                <div class="text-left">
                    <p class="text-muted small">
                        <small>
                            Note Registered? <a href="" class="text-dark fw-bold">Register Now!</a>
                        </small>
                    </p>
                </div>
            </div>

            {{-- Right Login --}}
            <div class="col-lg-6 login-right  border-left">
                <div class="container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p class="fs-5 fw-bold">Log in</p>
                        <div class="mb-3">
                            <label for="email" :value="__('Email')"><small>Email</small></label>
                            <input id="email" class="form-control form-control-lg bg-light fs-6" type="email"
                                name="email" :value="old('email')" required autofocus autocomplete="username">
                        </div>
                        <div class="mb-3">
                            <label input-label for="password" :value="__('Password')"><small>Password</small></label>
                            <input id="password" class="form-control form-control-lg bg-light fs-6" type="password"
                                name="password" required autocomplete="current-password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-secondary small" for="exampleCheck1">
                                <small>Keep me logged in</small>
                            </label>
                        </div>
                        <div class="input-group mb-2">
                            <button type="submit" class="btn btn-dark btn-lg w-100 fs-6">Log in now</button>
                        </div>
                        <div class="input-group">
                            <a href="#" class="text-dark fw-bold small"><small>Forgot your password?</small></a>
                        </div>

                        <p class="mt-5"><small>Or sign in with</small></p>
                        <div class="features row">
                            <div class="col input-group mb-3">
                                <button class="btn btn-lg btn-light fs-6 border">
                                    <img src="{{ asset('ic_google.webp') }}" style="width:15px">
                                    <small>Google</small>
                                </button>
                            </div>
                            <div class="col input-group mb-3">
                                <button class="btn btn-lg btn-light fs-6 border">
                                    <img src="{{ asset('ic_github.png') }}" style="width:15px">
                                    <small>Github</small>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Email Address -->
    {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div> --}}

    </x-guest-layout>
