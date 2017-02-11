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

//Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['web'], 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@redirect');

    // Auth routes
    //Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::auth();
    Route::get('logout', 'Auth\LoginController@logout');

    Route::name('home')->get('/dashboard', 'AdminController@index');
});
