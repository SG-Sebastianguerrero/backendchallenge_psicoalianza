<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobPositionController;


Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard',function(){
            return view('dashboard');
        })->name('dashboard');
    
        Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
        Route::get('/job_positions', [JobPositionController::class, 'index'])->name('job_positions');
        
    });
});

require __DIR__.'/auth.php';