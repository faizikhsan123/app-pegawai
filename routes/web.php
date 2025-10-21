<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalariesController;
use App\Models\Attendance;
use App\Models\Departement;
use App\Models\Salaries;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/employes', EmployeeController::class);

Route::resource('/departements', DepartementController::class);

Route::resource('/attendance', AttendanceController::class);

Route::resource('/positions', PositionController::class);

Route::resource('/salaries', SalariesController::class);
    

