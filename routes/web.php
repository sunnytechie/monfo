<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/donation', [App\Http\Controllers\WelcomeController::class, 'donation'])->name('donation');
Route::post('/donation', [App\Http\Controllers\WelcomeController::class, 'donationPayment'])->name('donation.payment');

//Registeration
Route::get('/training/registeraion', [App\Http\Controllers\WelcomeController::class, 'register'])->name('training');
Route::post('/training/registeraion', [App\Http\Controllers\WelcomeController::class, 'registerTrainings'])->name('training.register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
