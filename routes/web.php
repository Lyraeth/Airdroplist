<?php

use App\Http\Controllers\Airdrop\AirdropController;
use App\Http\Controllers\Airdrop\AirdropDeleteController;
use App\Http\Controllers\Airdrop\AirdropEditController;
use App\Http\Controllers\Airdrop\AirdropStoreController;
use App\Http\Controllers\Airdrop\AirdropUpdateController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Wallet\WalletController;
use App\Http\Controllers\Wallet\WalletDeleteController;
use App\Http\Controllers\Wallet\WalletEditController;
use App\Http\Controllers\Wallet\WalletStoreController;
use App\Http\Controllers\Wallet\WalletUpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

// Wallet
Route::middleware('auth')->group(function () {
    Route::get('/wallet', WalletController::class)->name('wallets.index');
    Route::get('/addwallet', [WalletController::class, 'edit'])->name('wallets.partials.add-wallet');
    Route::post('wallet', WalletStoreController::class)->name('wallet.store');
    Route::get('wallet/{id}/edit', WalletEditController::class)->name('wallets.partials.edit-wallet');
    Route::put('wallet/{id}', WalletUpdateController::class)->name('wallet.update');
    Route::delete('wallet/{id}', WalletDeleteController::class)->name('wallet.destroy');
});

// Airdrop
Route::middleware('auth')->group(function () {
    Route::get('/airdrop', AirdropController::class)->name('airdrops.index');
    Route::get('/addairdrop', [AirdropController::class, 'add'])->name('airdrop.partials.add-airdrops');
    Route::get('/airdrop/{id}/view', [AirdropController::class, 'view'])->name('airdrops.view');
    Route::post('/airdrop', AirdropStoreController::class)->name('airdrops.store');
    Route::delete('airdrops/{id}', AirdropDeleteController::class)->name('airdrops.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', ProfileController::class)->name('profile.index');
    Route::get('/editprofile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';