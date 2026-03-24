<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContractTypeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth-login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return redirect()->route('dashboard.index');
    });

    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/employee', EmployeeController::class);
    Route::resource('/contract', ContractTypeController::class);
});
