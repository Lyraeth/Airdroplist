<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow h-100 py-2" style="border-left-width: 5px; border-left-color: rgb(3, 140, 142)">
                <div class="card-body">
                    <div class="container text-center">
                        <div class="row no-gutters align-items-start">
                            <div class="col-xl-2 col-md-6 mb-4 align-items-center">
                                <div class="home-img mb-4">
                                    <img src="{{ asset('profile.jpeg') }}"
                                        class="rounded-circle border border-3 border-dark"
                                        style="width: 150px; height:150px;">
                                </div>
                                <div class="col">
                                    <a href="{{ route('profile.edit') }}" class="btn btn-accent">Edit Profile</a>
                                </div>
                            </div>
                            <div class="col align-items-start text-start">
                                <div class="fs-6 fw-bold">{{ Auth::user()->name }}</div>
                                <div class="fs-8 text-primary">{{ Auth::user()->email }}</div>
                                <br>
                                <i class="fa-solid fa-user-clock"></i><span class="ml-2">Joined
                                    {{ Auth::user()->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('welcome-bg.png') }}" width="200" height="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row text-center">
                <div class="col col-md-8">
                    <div class="row mr-12">
                        <div class="fs-3 fw-bold text-start mb-4">Row 1</div>
                        <div class="col">
                            <div class="card shadow h-100 py-2 mb-4"
                                style="border-left-width: 5px; border-left-color: yellow">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow h-100 py-2 mb-4"
                                style="border-left-width: 5px; border-left-color: yellow">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!-- Force next columns to break to new line at md breakpoint and up -->
                        <div class="w-100 d-none d-md-block py-2"></div>
                        <div class="col">
                            <div class="card shadow h-100 py-2 mb-4"
                                style="border-left-width: 5px; border-left-color: yellow">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow h-100 py-2 mb-4"
                                style="border-left-width: 5px; border-left-color: yellow">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fs-3 fw-bold text-start mb-4">Row 2</div>
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-pills card-header-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1"
                                        aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
