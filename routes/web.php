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

use App\Exceptions\AdminPageNotFoundException;

Route::group(['prefix' => 'admin', 'middleware' => ['web'], 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@redirect');

    // Auth routes
    //Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::auth();
    Route::get('logout', 'Auth\LoginController@logout');

    Route::name('home')->get('/dashboard', 'AdminController@index');

    Route::name('get-lang')->post('/get-lang', 'LanguageController@get');
    Route::name('change-lang')->post('/change-lang', 'LanguageController@change');

    /*
     * Catch all route
     */
    Route::name('catch-all')->get('/{path}', function () {
        throw new AdminPageNotFoundException();
    });
});
