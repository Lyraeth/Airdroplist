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

                <a class="btn btn-success mx-6" href="{{ route('airdrop.partials.add-airdrops') }}">
                    Add Airdrops
                </a>


                <section class="ftco-section mt-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-wrap">
                                    <table class="table table-responsive-xl">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Airdrop Name</th>
                                                <th>Wallet Address / Email</th>
                                                <th>Link Airdrop</th>
                                                <th>Status</th>
                                                <th>Post Date</th>
                                                <th>Done Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($airdrops as $airdrop)
                                                <tr class="text-center">
                                                    <th>{{ $no++ }}</th>
                                                    <th>{{ $airdrop->name_airdrops }}</th>
                                                    <th>{{ $airdrop->wallets->wallet_address }}</th>
                                                    <th>{{ $airdrop->link_airdrops }}</th>
                                                    <th>{{ $airdrop->status_airdrops }}</th>
                                                    <th>{{ $airdrop->postdate_airdrops }}</th>
                                                    <th>{{ $airdrop->donedate_airdrops }}</th>
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
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-error btn-sm"><i
                                                                            class="fa-solid fa-trash-can"></i></button>
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
