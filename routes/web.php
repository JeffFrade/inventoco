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

Route::get('/', function () {
    //Session::flush();
    return redirect('/login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'User',
], function () {
    Route::resource('user', 'UserController');

    Route::get('/level', 'levelController@index');
    Route::post('/level', 'levelController@store');
    Route::get('/level/{id}', 'levelController@edit');
    Route::put('/level/{id}', 'levelController@update');
    Route::delete('/level/{id}', 'levelController@delete');
});
