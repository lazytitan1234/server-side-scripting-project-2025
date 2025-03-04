<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('colleges.index');
});

Route::resource('colleges', CollegeController::class);

Route::resource('students', StudentController::class);