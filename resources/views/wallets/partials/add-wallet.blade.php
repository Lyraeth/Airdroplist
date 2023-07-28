<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Wallet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Edit Your Details Address :
                </div>
                <hr>

                <div class="join">
                    <div class="join-item">
                        <form action="{{ route('wallet.store') }}" method="post" class="mt-4 needs-validation" novalidate>
                            @csrf
                            <div class="mb-6 mx-4">
                                <label for="exampleFormControlInput1" class="form-label">Wallet Name</label>
                                <input type="text" name="wallet_name" class="form-control"
                                    id="exampleFormControlInput1">
                                <div id="passwordHelpBlock" class="form-text  mb-4">
                                    Your wallet name is whatever you want
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Wallet Application</label>
                                <input type="text" name="wallet_application" class="form-control mb-4"
                                    id="exampleFormControlInput1" placeholder="Metamask, etc.">
                                <label for="exampleFormControlInput1" class="form-label">Wallet Address</label>
                                <input type="text" name="wallet_address" class="form-control mb-4"
                                    id="exampleFormControlInput1" placeholder="0x" required>
                                <label for="exampleFormControlInput1" class="form-label">Wallet Locations</label>
                                <select name="wallet_location" class="form-select" aria-label="Default select example"
                                    required>
                                    <option></option>
                                    <option value="Web Extenstion">Web Extenstion</option>
                                    <option value="Application">Application</option>
                                    <option value="Extension & Application">Extension & Application</option>
                                </select>
                            </div>
                            <input type="submit" value="Add Wallet" class="btn btn-accent mx-4 mb-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
