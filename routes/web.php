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
    return view('index');
});

Route::get('/deleteall', function () {
    return view('deleteall');
});

Route::get('/delete', function () {
	return view('/delete');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('image-upload', 'HomeController@image')->name('image.upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

Route::get('deleteone', 'ImageUploadController@imageDeletePost')->name('image.delete');

Route::post('deleteonce', 'ImageUploadController@imageDeletePostReal')->name('image.delete.post');



