<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WalletUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): RedirectResponse
    {
        $wallets = Wallet::find($id);

        $wallets->update([
            'wallet_name' => request('wallet_name'),
            'wallet_application' => request('wallet_application'),
            'wallet_address' => request('wallet_address'),
            'wallet_location' => request('wallet_location')
        ]);

        return redirect('wallet');
    }
}