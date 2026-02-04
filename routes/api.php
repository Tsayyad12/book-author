<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

// API resource routes
Route::apiResource('authors', AuthorController::class);
Route::apiResource('books', BookController::class);
