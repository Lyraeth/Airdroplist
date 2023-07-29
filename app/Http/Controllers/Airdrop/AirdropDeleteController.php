<?php

namespace App\Http\Controllers\Airdrop;

use App\Http\Controllers\Controller;
use App\Models\Airdrop;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AirdropDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): RedirectResponse
    {
        Airdrop::find($id)->delete();

        return redirect('airdrop');
    }
}