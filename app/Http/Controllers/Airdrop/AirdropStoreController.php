<?php

namespace App\Http\Controllers\Airdrop;

use App\Http\Controllers\Controller;
use App\Models\Airdrop;
use App\Models\Wallet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AirdropStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): RedirectResponse
    {
        Airdrop::create([
            'user_id' => Auth::id(),
            'name_airdrops' => request('name_airdrops'),
            'wallets_id' => request('wallets_id'),
            'link_airdrops' => request('link_airdrops'),
            'status_airdrops' => request('status_airdrops'),
            'postdate_airdrops' => request('postdate_airdrops'),
            'donedate_airdrops' => request('donedate_airdrops'),
            'extra_airdrops' => request('extra_airdrops')
        ]);

        return redirect('airdrop');
    }
}