<?php

use App\Http\Controllers\AuditLogsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ContractTypeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeStatusController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\UserController;
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

    Route::middleware(['permission:view default pages'])->group(function (){
        Route::resource('/dashboard', DashboardController::class);
    });

    Route::middleware(['permission:manage employee'])->group(function () {
        Route::resource('/employee', EmployeeController::class);
    });

    Route::middleware(['permission:manage contract type'])->group(function () {
        Route::resource('/contract-type', ContractTypeController::class);
        Route::get('/contract-type/{document}/download', [ContractController::class, 'download'])
            ->name('contract.download');
    });

    Route::middleware(['permission:manage contract'])->group(function (){
        Route::resource('/contract', ContractController::class);

    });

    Route::middleware(['permission:manage position'])->group(function (){
        Route::resource('/position', PositionController::class);
    });

    Route::middleware(['permission:manage status'])->group(function (){
        Route::resource('/status', EmployeeStatusController::class);
    });

    Route::middleware(['permission:manage users'])->group(function(){
        Route::resource('/user', UserController::class);
    });

    Route::middleware(['permission:view logs page'])->group(function () {
        Route::resource('/logs', AuditLogsController::class);
    });
});
