<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Airdrop Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Your Airdrop Detail :
                </div>
                <hr>

                <div class="p-6 text-gray-900">
                    <label for="exampleFormControlInput1" class="form-label">Name Project :</label>
                    <input type="text" class="form-control mb-4" id="exampleFormControlInput1"
                        value="{{ $airdrops->name_airdrops }}" disabled>
                    <label for="exampleFormControlInput1" class="form-label">Wallet Address :</label>
                    <input type="text" class="form-control mb-4" id="exampleFormControlInput1"
                        value="{{ $airdrops->wallets->wallet_address }}" disabled>

                    <label for="exampleFormControlInput1" class="form-label mb-4">Link Project / Post Telegram :
                        <a class="link link-hover" href="{{ $airdrops->link_airdrops }}"
                            target="_blank">{{ $airdrops->link_airdrops }}
                        </a>
                    </label><br>
                    <label for="exampleFormControlInput1" class="form-label">Status :</label>
                    <input type="text" class="form-control mb-4" id="exampleFormControlInput1"
                        value="{{ $airdrops->status->status_name }}" disabled>
                    <label for="exampleFormControlInput1" class="form-label">Airdrop Notes :</label>
                    <textarea type="text" class="form-control mb-4" id="exampleFormControlInput1" disabled> {{ $airdrops->extra_airdrops }}
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
