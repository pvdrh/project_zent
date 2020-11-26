<?php

use App\Http\Controllers\Backend\DashboardController;
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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login.form');
Route::post('admin/login', 'Auth\LoginController@login')->name('login.store');

Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('frontend.home');

// Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin'
    // 'middleware' => ['auth','admin']
], function (){
    // Trang dashboard - trang chủ admin
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    // Quản lý sản phẩm
    Route::group(['prefix' => 'products'], function(){
    Route::get('/', 'ProductController@index')
    ->name('backend.products.index');
    Route::get('/create', 'ProductController@create')
    ->name('backend.products.create');
    Route::get('/edit', 'ProductController@edit')
    ->name('backend.products.edit');
    Route::POST('/store', 'ProductController@store')
    ->name('backend.products.store');
    });
     //Quản lý người dùng
    Route::group(['prefix' => 'users'], function(){
    Route::get('/', 'UserController@index')
    ->name('backend.users.index');
    Route::get('/create', 'UserController@create')
    ->name('backend.users.create');
    Route::get('/edit/{id}', 'UserController@edit')
    ->name('backend.users.edit');
        Route::get('/userinfo', 'UserController@test');
    });

    //Quản lý danh mục
    Route::group(['prefix' => 'categories'], function(){
    Route::get('/', 'CategoryController@index')
    ->name('backend.categories.index');
    Route::get('/create', 'CategoryController@create')
    ->name('backend.categories.create');
    Route::get('/edit', 'CategoryController@edit')
    ->name('backend.categories.edit');
    });
});

// Route::get('/product/create-img', [\App\Http\Controllers\Backend\ProductController::class,'store']);

//Route frontend

// Route::get('/categories', [\App\Http\Controllers\Frontend\CategoryController::class,'index']);

// Route::get('/product-detail', [\App\Http\Controllers\Frontend\ProductController::class,'index']);

// Route::get('/order', [\App\Http\Controllers\Frontend\UserController::class,'index']);

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');