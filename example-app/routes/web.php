<?php

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

use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\Admin\NewsController as AdminNewsController;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoriesController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\HomeController;


// роутинг для Админа
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () { // создаем префикс Admin для запросов // добавляем нейминг
    Route::resource('/news', AdminNewsController::class);
    Route::resource('/categories', AdminCategoriesController::class);
    Route::resource('/categories/{id}/edit', AdminCategoriesController::class);
});

Route::get('/news', [NewsController::class, 'index']
)->name('news');

Route::get('/news/show/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/show/{id}', [CategoryController::class, 'show'])
    ->where('id', '\d')
    ->name('categories.show');

//Route::get('/', [HomeController::class, 'index']);
Route::get('/', [NewsController::class, 'index']);
