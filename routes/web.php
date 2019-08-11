<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/{id}', 'HomeController@show')->name('show');

Route::get('cart', 'CartController@index')->name('cart');
Route::post('cart/product/{id}/add', 'CartController@addToCart')->name('add-to-cart');
Route::post('cart/product/{id}/remove', 'CartController@removeToCart')->name('remove-to-cart');

/**
 * Admin Routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::name('admin.')->group(function(){
        Route::namespace('Admin')->group(function(){

            Route::get('login', 'LoginController@showLoginForm')->name('loginform');
            Route::post('login', 'LoginController@login')->name('login');
            Route::post('logout', 'LoginController@logout')->name('logout');

            Route::get('', 'DashboardController')->name('dashboard');

            Route::resource('products', 'ProductController');

            // Samples
            Route::view('datatable', 'admin.datatable');
            Route::view('chart', 'admin.chart');
        });
    });
});
