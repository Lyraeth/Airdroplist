<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Airdrop List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Your Airdrop List :
                </div>

                <a class="btn btn-accent mx-6" href="{{ route('airdrop.partials.add-airdrops') }}">
                    Add Airdrops
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
                                                <th class="text-center">Airdrop Name</th>
                                                <th class="text-center">Wallet Address / Email</th>
                                                <th class="text-center">Link Airdrop</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($airdrops as $airdrop)
                                                <tr>
                                                    <th>{{ $no++ }}</th>
                                                    <th>{{ $airdrop->name_airdrops }}</th>
                                                    <th>{{ $airdrop->wallets->wallet_address }}</th>
                                                    <th>{{ $airdrop->link_airdrops }}</th>
                                                    <th>{{ $airdrop->status_airdrops }}</th>
                                                    {{-- <th>{{ $airdrop->postdate_airdrops }}</th> --}}
                                                    {{-- <th>{{ $airdrop->donedate_airdrops }}</th> --}}
                                                    <th>
                                                        <div class="row">
                                                            <div class="col">
                                                                <a href="{{ route('airdrops.view', $airdrop->id) }}"
                                                                    type="button" class="btn btn-success btn-sm">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <form
                                                                    action="{{ route('airdrops.destroy', $airdrop->id) }}"
                                                                    id="deleteFormAirdrop{{ $airdrop->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-error btn-sm"
                                                                        onclick="confirmDeleteAirdrop({{ $airdrop->id }})">
                                                                        <i class="fa-solid fa-trash-can">
                                                                        </i>
                                                                    </button>
                                                                </form>
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
