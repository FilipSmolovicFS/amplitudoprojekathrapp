<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ContractTypeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeStatusController;
use App\Http\Controllers\PositionController;
use App\Models\EmployeeStatus;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth-login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return Inertia::render('auth/Login');
    });

    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/employee', EmployeeController::class);
    Route::resource('/contract-type', ContractTypeController::class);
    Route::resource('/contract', ContractController::class);
    Route::resource('/position', PositionController::class);
    Route::resource('/status', EmployeeStatusController::class);

    Route::get('/contract-type/{document}/download', [ContractController::class, 'download'])
        ->name('contract.download');
});
