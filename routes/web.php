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
        Route::get('/employee/{id}', [EmployeeController::class, 'show']);
        Route::post('/employee', [EmployeeController::class, 'store'])->name('employee');
        Route::put('/employee', [EmployeeController::class, 'update'])->name('employee');
        Route::delete('/employee/{id}', [EmployeeController::class, 'destroy']);

        Route::get('/job_positions', [JobPositionController::class, 'index'])->name('job_positions');
        Route::get('/job_position/{id}', [JobPositionController::class, 'show']);
        Route::post('/job_position', [JobPositionController::class, 'store'])->name('job_position');
        Route::put('/job_position', [JobPositionController::class, 'update'])->name('job_position');
        Route::delete('/job_position/{id}', [JobPositionController::class, 'destroy']);
    });
});

require __DIR__.'/auth.php';