<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WalletEditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): View
    {
        $wallets = Wallet::find($id);

        $this->authorize('update', $wallets);

        return view('wallets.partials.edit-wallet', [
            'wallets' => Wallet::find($id),
        ]);
    }
}