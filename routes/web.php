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
    return view('welcome');
});
Route::get('/uploadFile','UploadFileController@index');
Route::post('/uploadFile','UploadFileController@upload');
Route::get('/main','MainController@index');
Route::post('/main/checklogin','MainController@checkLogin');
Route::get('/main/successlogin','MainController@successlogin');
Route::get('/main/logout','MainController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
