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
    return view('home');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('profile', 'UserController@profile');
Route::post('profile','UserController@update_avatar');
// Route::get('profile', 'UserController@showImages');

Route::get('/home', 'HomeController@index');

Route::get('upload', 'ImageUploadController@view');
Route::post('upload','ImageUploadController@upload');
