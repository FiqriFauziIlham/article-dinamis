<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'index']); // Mendapatkan semua artikel
Route::get('/articles/{id}', [ArticleController::class, 'show']); // Mendapatkan satu artikel berdasarkan ID
Route::post('/articles/create', [ArticleController::class, 'store']); // Menambahkan artikel baru
Route::put('/articles/update/{id}', [ArticleController::class, 'update']); // Memperbarui artikel berdasarkan ID
Route::delete('/articles/delete/{id}', [ArticleController::class, 'destroy']); // Menghapus artikel berdasarkan ID