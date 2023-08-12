<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow h-100 py-2" style="border-left-width: 5px; border-left-color: rgb(3, 140, 142)">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="card-title">Welcome to Dashboard, {{ Auth::user()->name }}!</div>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="col mt-4">
                                <a href="{{ route('profile.index') }}" class="btn btn-accent">Profile Information</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <img src="{{ asset('welcome-bg.png') }}" width="200" height="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row align-items-center">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2" style="border-left-width: 5px; border-left-color: aqua">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="fs-6 fw-bold text-primary">Total Airdrops</div>
                                {{-- @can('view', $airdrops) --}}
                                <div class="fs-3 mb-0 fw-bold text-muted">{{ $airdrops }}</div>
                                {{-- @endcan --}}
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-droplet fa-2x text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2"
                    style="border-left-width: 5px; border-left-color: rgb(137, 201, 137)">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="fs-6 fw-bold text-primary">Total Wallet</div>
                                <div class="fs-3 mb-0 fw-bold text-muted">{{ $wallets }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-wallet fa-2x text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2"
                    style="border-left-width: 5px; border-left-color: rgb(186, 52, 186)">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="fs-6 fw-bold text-primary">Task</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        @php
                                            $no = 100;
                                            $formattedTotal = 0; // Nilai default jika tidak ada data airdrop

                                            if ($airdrops > 0) {
                                                $total = ($totaldone / $airdrops) * $no;
                                                $formattedTotal = number_format($total, 1);
                                            }
                                        @endphp

                                        <div class="fs-3 mb-0 fw-bold text-muted">{{ $formattedTotal }}%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {{ $formattedTotal }}%" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-bars-progress fa-2x text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow h-100 py-2" style="border-left-width: 5px; border-left-color: orange">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="fs-6 fw-bold text-primary">Pending Task</div>
                                <div class="fs-3 mb-0 fw-bold text-muted">{{ $pendingtask }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-hourglass-half fa-2x text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow h-100 py-2 mb-4" style="border-left-width: 5px; border-left-color: yellow">
                <div class="card-body">
                    <div class="col mr-2 mb-4">
                        <div class="fs-4 fw-bold">Your Kindly Reminder :)</div>
                    </div>
                    <hr>
                    <div class="table-wrap table-responsive mt-4">
                        <table id="example" class="display text-center" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Airdrop Name</th>
                                    <th class="text-center">Wallet Address / Email</th>
                                    <th class="text-center">Link Airdrop</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @can('view', $airdrops) --}}
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($dataairdrops as $airdrop)
                                    @if ($airdrop->status->id == 3)
                                        <tr class="text-center">
                                            <th>{{ $no++ }}</th>
                                            <th>{{ $airdrop->name_airdrops }}</th>
                                            <th>{{ $airdrop->wallets->wallet_address }}</th>
                                            <th>
                                                <a target="_blank"
                                                    href="{{ $airdrop->link_airdrops }}">{{ $airdrop->link_airdrops }}
                                                </a>
                                            </th>
                                            <th>{{ $airdrop->status->status_name }}</th>
                                        </tr>
                                    @endif
                                @endforeach
                                {{-- @endcan --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
