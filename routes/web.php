<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/add', [TaskController::class, 'create_view']);

Route::post('/tasks/add', [TaskController::class, 'create']);

Route::get('/tasks/edit/{id}', [TaskController::class, 'edit_view']);

Route::post('/tasks/edit/{id}', [TaskController::class, 'edit']);

Route::delete('/tasks/del/{id}', [TaskController::class, 'delete']);
