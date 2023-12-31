<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::get('/students/store/{id}', [StudentController::class, 'store']);
Route::get('/students/delete/{id}', [StudentController::class, 'delete']);

