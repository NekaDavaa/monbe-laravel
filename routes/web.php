<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/hi', [WelcomeController::class, 'index'])->name('hi');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/article/delete/{id?}', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::get('/articles/new', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/new', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');
Route::get('/article/show/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/cars', [CarController::class, 'index'])->name('cars');


require __DIR__.'/auth.php';
