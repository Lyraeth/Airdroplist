<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Welcome to your dashboard!
                </div>
                <hr>
            </div>
            <div class="card my-2">
                <div class="row">
                    <div class="col">
                        <div class="card-body bg-primary">
                            <div class="p-6 text-gray-800">
                                <p>Total Airdrops : </p>
                                {{ $airdrops }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body bg-success">
                            <div class="p-6 text-gray-800">
                                <p>Total Wallets : </p>
                                {{ $wallets }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
