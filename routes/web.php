<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Redirect\RedirectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirect',[RedirectController::class, 'dashboard']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
