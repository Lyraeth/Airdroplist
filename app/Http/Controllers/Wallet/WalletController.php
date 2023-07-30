<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class WalletController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $user = Auth::user();
        $wallets = $user->wallets; // Mengambil semua wallet yang terkait dengan user yang sedang login

        return view('wallets.index', [
            'wallets' => $wallets,
            'user' => $user,
        ]);
    }

    public function edit(): View
    {
        return view('wallets.partials.add-wallet');
    }
}