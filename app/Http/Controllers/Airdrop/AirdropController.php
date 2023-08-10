<?php

namespace App\Http\Controllers\Airdrop;

use App\Http\Controllers\Controller;
use App\Models\Airdrop;
use App\Models\Status;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AirdropController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = Auth::user();
        $airdrops = $user->airdrops; // Mengambil semua airdrops yang terkait dengan user yang sedang login

        return view('airdrops.index', [
            'airdrops' => $airdrops,
            'user' => $user,
        ]);
    }
    public function add(): View
    {
        return view('airdrops.partials.add-airdrops', [
            'wallets' => Wallet::all(),
            'statuses' => Status::all(),
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