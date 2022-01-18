<?php
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::get('useredit', [CustomAuthController::class, 'userEdit'])->name('useredit');
Route::put('custom-update', [CustomAuthController::class, 'customUpdate'])->name('update.custom');

Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('/', function () {
    return view('index');
});


