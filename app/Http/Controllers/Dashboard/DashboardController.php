<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Airdrop;
use App\Models\Status;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $airdrops = Airdrop::count();
        $wallets = Wallet::count();
        $dataairdrops = Airdrop::all();
        $pendingtask = Airdrop::whereHas('status', function ($query) {
            $query->where('status_name', 'Pending');
        })->count();
        $totaldone = Airdrop::whereHas('status', function ($query) {
            $query->where('status_name', 'Done');
        })->count();

        return view('dashboard', compact('airdrops', 'wallets', 'dataairdrops', 'pendingtask', 'totaldone'));
    }
}