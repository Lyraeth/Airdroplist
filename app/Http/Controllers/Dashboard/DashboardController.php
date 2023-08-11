<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Airdrop;
use App\Models\Status;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function __invoke(): View
    {
        $user = Auth::user();
        $airdrops = $user->airdrops->count();
        $wallets = $user->wallets->count();
        $dataairdrops = $user->airdrops;

        $pendingtask = $user->airdrops()->whereHas('status', function ($query) {
            $query->where('status_name', 'Pending');
        })->count();
        $totaldone = $user->airdrops()->whereHas('status', function ($query) {
            $query->where('status_name', 'Done');
        })->count();

        return view('dashboard', compact('airdrops', 'wallets', 'dataairdrops', 'pendingtask', 'totaldone'));
    }
}
