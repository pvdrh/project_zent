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


//===Auth Backend===
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login.form');
Route::post('admin/login', 'Auth\LoginController@login')->name('login.store');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');




//===Backend===
Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'middleware' => ['auth','admin']
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
    Route::POST('/store', 'UserController@store')
    ->name('backend.users.store');
    });

    //Quản lý danh mục
    Route::group(['prefix' => 'categories'], function(){
    Route::get('/', 'CategoryController@index')
    ->name('backend.categories.index');
    Route::get('get-data', 'CategoryController@getData');
    Route::get('/create', 'CategoryController@create')
    ->name('backend.categories.create');
    Route::get('/edit{id}', 'CategoryController@edit')
    ->name('backend.categories.edit');
    Route::POST('/store', 'CategoryController@store')
    ->name('backend.categories.store');
    Route::delete('/delete{id}', 'CategoryController@destroy')
    ->name('backend.categories.delete');
    Route::put('/update{id}', 'CategoryController@update')
    ->name('backend.categories.update');
    });
});



//===Frontend===
Route::group([
    'namespace' => 'Frontend',

], function (){

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/contact', 'HomeController@contact')->name('contact');


    Route::get('/cart', 'CartController@index')
    ->name('cart.index');
    Route::post('/cart/add/{id}', 'CartController@add')
    ->name('cart.add');

    Route::get('/product/detail', 'ProductController@index')
    ->name('product.index');


    //test
    // Route::get('/product/{slug}-{id}.html', 'ProductController@index')
    // ->name('product.index');

});

