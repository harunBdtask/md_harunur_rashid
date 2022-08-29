<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('/solution/1', 'solutionOne');
    Route::get('/solution/2', 'solutionTwo');
    Route::get('/solution/3', 'solutionThree');
});
