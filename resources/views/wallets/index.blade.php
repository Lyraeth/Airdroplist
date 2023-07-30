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

                <div class="overflow-x-auto mt-4">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr class="text-center text-gray-500">
                                <th>No</th>
                                <th>Name Wallet</th>
                                <th>Application Wallet</th>
                                <th>Address Wallet</th>
                                <th>Location Wallet</th>
                                @foreach ($wallets as $wallet)
                                    @if ($user->id == $wallet->user_id)
                                        <th>Action</th>
                                    @break
                                @endif
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($wallets as $wallet)
                            <tr class="text-center">
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
                                                <form action="{{ route('wallet.destroy', $wallet->id) }}"
                                                    id="deleteFormWallet{{ $wallet->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-error btn-sm"
                                                        onclick="confirmDeleteWallet({{ $wallet->id }})"><i
                                                            class="fa-solid fa-trash-can"></i></button>
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
</x-app-layout>
