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
                    <label for="exampleFormControlInput1" class="form-label mb-4">Airdrop Name :
                        {{ $airdrops->name_airdrops }}</label><br>
                    <label for="exampleFormControlInput1" class="form-label mb-4">Airdrop Wallet :
                        {{ $airdrops->wallets->wallet_address }}</label><br>
                    <label for="exampleFormControlInput1" class="form-label mb-4">Airdrop Link :
                        <a class="link link-hover text-green-900" href="https://{{ $airdrops->link_airdrops }}"
                            target="_blank">{{ $airdrops->link_airdrops }}</a>
                    </label><br>
                    <label for="exampleFormControlInput1" class="form-label mb-4">Airdrop Status :
                        {{ $airdrops->status_airdrops }}</label><br>
                    <label for="exampleFormControlInput1" class="form-label mb-4">Airdrop Post Date :
                        {{ $airdrops->postdate_airdrops }}</label><br>
                    <label for="exampleFormControlInput1" class="form-label mb-4">Airdrop Done Date :
                        {{ $airdrops->donedate_airdrops }}</label><br>
                    <label for="exampleFormControlInput1" class="form-label">Airdrop Notes :
                        {{ $airdrops->extra_airdrops }}</label>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
