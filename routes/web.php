<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(TodoController::class)->group(function () {
    // 名前付きルート名を設定
    Route::get('/todos', 'index')->name('todos.index');
    // 同一URIでもリクエスト毎に名前を設定
    Route::post('/todos', 'store')->name('todos.store');
    Route::patch('/todos/{todo}', 'update')->name('todos.update');
    Route::delete('/todos/{todo}', 'destroy')->name('todos.destroy');
});

// リダイレクトルート
Route::redirect('/legacy-url', '/todos', 301);
// フォールバックルートは命名任意、クロージャ可
Route::fallback(fn () => abort(404));
