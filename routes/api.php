<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\FolderController;

Route::apiResource('categories', CategoryController::class);

Route::apiResource('folders', FolderController::class);
