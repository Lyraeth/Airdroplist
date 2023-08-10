<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wallet List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Your Wallet Detail :
                </div>

                <a class="btn btn-accent mx-6" href="{{ route('wallets.partials.add-wallet') }}">
                    Add Wallet
                </a>

                <section class="ftco-section mt-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-wrap my-4">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Name Wallet</th>
                                                <th class="text-center">Application Wallet</th>
                                                <th class="text-center">Address Wallet</th>
                                                <th class="text-center">Location Wallet</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($wallets as $wallet)
                                                <tr>
                                                    <th>{{ $no++ }}</th>
                                                    <th>{{ $wallet->wallet_name }}</th>
                                                    <th>{{ $wallet->wallet_application }}</th>
                                                    <th>{{ $wallet->wallet_address }}</th>
                                                    <th>{{ $wallet->wallet_location }}</th>
                                                    <th>
                                                        <div class="row">
                                                            <div class="col">
                                                                @can('update', $wallet)
                                                                    <a href="{{ route('wallets.partials.edit-wallet', $wallet->id) }}"
                                                                        type="button" class="btn btn-success btn-sm">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                @endcan
                                                            </div>
                                                            <div class="col">
                                                                @can('delete', $wallet)
                                                                    <form
                                                                        action="{{ route('wallet.destroy', $wallet->id) }}"
                                                                        id="deleteFormWallet{{ $wallet->id }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="button" class="btn btn-error btn-sm"
                                                                            onclick="confirmDeleteWallet({{ $wallet->id }})">
                                                                            <i class="fa-solid fa-trash-can"></i>
                                                                        </button>
                                                                    </form>
                                                                @endcan
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
