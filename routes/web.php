<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\ContractTypeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Service\DashboardService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/dashboard', DashboardController::class);

Route::resource('/employee', EmployeeController::class);

Route::resource('/contract', ContractTypeController::class);
