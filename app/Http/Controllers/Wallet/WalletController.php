<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WalletController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('wallets.index', [
            'wallets' => Wallet::latest('id')->get(),
        ]);
    }

    public function edit(): View
    {
        return view('wallets.partials.add-wallet');
    }
}