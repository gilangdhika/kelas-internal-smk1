<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostController::class, 'index']);

Route::get('/tambah-post', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store']);

Route::get('/edit-post/{id}', [PostController::class, 'edit']);
Route::put('/update/{id}', [PostController::class, 'update']);

Route::get('/detail-post/{id}', [PostController::class, 'show']);

Route::delete('/delete-post/{id}', [PostController::class, 'beast']);