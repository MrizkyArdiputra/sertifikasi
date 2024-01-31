<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SkemaController;

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

Route::get('/', [PesertaController::class, 'index'])->name('home');
Route::get('/sertifikasi', [SkemaController::class, 'index'])->name('skema.index');
Route::get('/form', [PesertaController::class, 'create'])->name('peserta.create');
Route::post('/form', [PesertaController::class, 'store'])->name('peserta.store');
Route::get('/addskema', [SkemaController::class, 'create'])->name('skema.create');
Route::post('/addskema', [SkemaController::class, 'store'])->name('skema.store');
Route::get('/skema/{id}/edit', [SkemaController::class, 'edit'])->name('skema.edit');
Route::put('/skema/{id}', [SkemaController::class, 'update'])->name('skema.update');
Route::delete('/skema/{id}', [SkemaController::class, 'destroy'])->name('skema.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
