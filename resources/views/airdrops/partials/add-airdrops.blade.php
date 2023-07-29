<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Airdrop') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Add Your Airdrop Details :
                </div>
                <hr>

                <div class="join">
                    <div class="join-item">
                        <form action="{{ route('airdrops.store') }}" method="post" class="mt-4 needs-validation"
                            novalidate>
                            @csrf
                            <div class="mb-6 mx-4">
                                <label for="exampleFormControlInput1" class="form-label">Airdrops Name</label>
                                <input type="text" name="name_airdrops" class="form-control"
                                    id="exampleFormControlInput1" required>
                                <div id="passwordHelpBlock" class="form-text  mb-4">
                                    Airdrops project name
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Airdrops Wallet</label>
                                <select name="wallets_id" class="form-select mb-4" aria-label="Default select example"
                                    required>
                                    <option>Select your address or Email</option>
                                    @foreach ($wallets as $wallet)
                                        <option value="{{ $wallet->id }}">{{ $wallet->wallet_address }}</option>
                                    @endforeach
                                </select>
                                <label for="exampleFormControlInput1" class="form-label">Link Airdrops</label>
                                <input type="text" name="link_airdrops" class="form-control mb-4"
                                    id="exampleFormControlInput1" placeholder="Link telegram post or website">
                                <label for="exampleFormControlInput1" class="form-label">Status Airdrops</label>
                                <div class="form-check">
                                    <input class="form-check-input" value="Done" type="radio" name="status_airdrops"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Done
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="On Progress" type="radio"
                                        name="status_airdrops" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        On Progress
                                    </label>
                                </div>
                                <div class="form-check mb-4">
                                    <input class="form-check-input" value="To Do" type="radio" name="status_airdrops"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        To Do
                                    </label>
                                </div>
                                <label for="exampleFormControlInput1" class="form-label mb-4">Post Date Airdrops :
                                </label>
                                <input type="date" name="postdate_airdrops" id="exampleFormControlInput1"><br>
                                <label for="exampleFormControlInput1" class="form-label mb-4">Done Date Airdrops :
                                </label>
                                <input type="date" name="donedate_airdrops" id="exampleFormControlInput1"><br>

                                <label for="exampleFormControlInput1" class="form-label">Extra</label>
                                <input type="textarea" name="extra_airdrops" class="form-control"
                                    id="exampleFormControlInput1" required>

                            </div>
                            <input type="submit" value="Add Airdrops" class="btn btn-accent mx-4 mb-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
