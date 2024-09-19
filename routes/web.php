<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page.home');
});

Route::get('user-view/home', function () {
    return view('user-view.home');
});

Route::get('admin/home', function () {
    return view('admin.home');
});

Route::get('user/home', function () {
    return view('user-dashboard.home');
});

Route::get('user/table', function () {
    return view('user-dashboard.table');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
