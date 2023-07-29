<?php

namespace App\Http\Controllers\Airdrop;

use App\Http\Controllers\Controller;
use App\Models\Airdrop;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AirdropController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('airdrops.index', [
            'airdrops' => Airdrop::get(),
        ]);
    }
    public function add(): View
    {
        return view('airdrops.partials.add-airdrops', [
            'wallets' => Wallet::all(),
        ]);
    }

    public function view($id): View
    {
        $airdrops = Airdrop::find($id);

        return view('airdrops.view', [
            'airdrops' => Airdrop::find($id),
        ]);
    }

    public function edit(): View
    {
        return view('airdrops.partials.edit-airdrops');
    }
}
