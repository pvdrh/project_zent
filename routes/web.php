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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('form');
Route::post('login', 'Auth\LoginController@login')->name('store');
// Route::post('logout', 'Auth\LoginController@logoutt')->name('logoutt');



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
    Route::get('/edit/{id}', 'ProductController@edit')
    ->name('backend.products.edit');
    Route::POST('/store', 'ProductController@store')
    ->name('backend.products.store');
    Route::put('/update/{id}', 'ProductController@update')
    ->name('backend.products.update');
    Route::delete('/delete{id}', 'ProductController@destroy')
    ->name('backend.products.delete');
    
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
    Route::put('/update{id}', 'UserController@update')
    ->name('backend.users.update');
    Route::delete('/delete{id}', 'UserController@destroy')
    ->name('backend.users.delete');
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

    //Quản lý bài viết
    Route::group(['prefix' => 'posts'], function(){
    Route::get('/', 'PostController@index')
    ->name('backend.posts.index');
    Route::get('/create', 'PostController@create')
    ->name('backend.posts.create');
    Route::get('/edit{id}', 'PostController@edit')
    ->name('backend.posts.edit');
    Route::POST('/store', 'PostController@store')
    ->name('backend.posts.store');
    Route::delete('/delete{id}', 'PostController@destroy')
    ->name('backend.posts.delete');
    Route::put('/update{id}', 'PostController@update')
    ->name('backend.posts.update');
    });
});



//===Frontend===
Route::group([
    'namespace' => 'Frontend',

], function (){

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/cart', 'CartController@index')->name('cart');
    Route::get('/category', 'HomeController@category')->name('category');
    Route::post('/cart/add/{id}', 'CartController@add')
    ->name('cart.add');
    Route::get('/product/{id}', 'HomeController@show')
    ->name('product.detail');

    Route::group([
        'prefix' => 'cart',
    ], function () {
        Route::post('/create/{cart}','CartController@store')->name('cart.store');
        Route::get('/', 'CartController@index')->name('cart.index');
        Route::put('{Cart}', 'CartController@update')->name('cart.update');
        Route::delete('delete/{Cart}', 'CartController@delete')->name('cart.delete');
        Route::delete('destroy', 'CartController@destroy')->name('cart.destroy');
        Route::put('update/{Cart}','CartController@update')->name('cart.update');
    });

    Route::group([
        'prefix'=>'Checkout'
    ], function () {
        Route::get('/checkout','CheckoutController@index')->name('checkout.index');
        Route::post('/store', 'CheckoutController@store')->name('checkout.store');
    });

    Route::group([
        'prefix'=>'blog'
    ],function (){
        Route::get('','BlogController@index')->name('blog.index');
        Route::get('/{id}','BlogController@show')->name('show.blog');
    });
});

