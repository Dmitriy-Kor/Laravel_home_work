<?php

use Illuminate\Support\Facades\Auth;
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
use \App\Http\Controllers\ContactController;
use App\Http\Controllers\Account\AccountController as AccountController;

Route::group(['middleware' => 'auth'], function(){
    Route::get('/logout', function (){
        Auth::logout();
        return redirect()->route('login');
    });
    //роут для авторизованого пользователя
    Route::get('/account', AccountController::class)->name('account');

    // роутинг для Админа
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () { // создаем префикс Admin для запросов // добавляем нейминг
        Route::resource('/news', AdminNewsController::class);
        Route::resource('/categories', AdminCategoriesController::class);

    });
});



Route::get('/news', [NewsController::class, 'index']
)->name('news');

Route::get('/news/show/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/show/{id}', [CategoryController::class, 'show'])
    ->where('id', '\d+')
    ->name('categories.show');

Route::get('/', [NewsController::class, 'index'])->name('home');

Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::post('/contact/store',[ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
