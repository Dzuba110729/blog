<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;


Route::apiResource('articles', ArticleController::class);
Route::apiResource('tags', TagController::class);
