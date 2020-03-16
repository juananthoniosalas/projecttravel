<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
	return view('about');
});


Route::get('contact', function () {
	return view('contact');
});


Route::get('events', function () {
	return view('events');
});


Route::get('classes', function () {
	return view('classes');
});


Route::get('selesaidaftar', function () {
	return view('selesaidaftar');
});


Route::get('/classes', 'UploadController@index');
Route::get('/travel/travel_home', 'TravelController@index');
Route::get('/travel/tambah_travel', 'TravelController@tambah');
Route::post('/travel/store', 'TravelController@store');
Route::get('/travel/edit/{id}', 'TravelController@edit');
Route::put('/travel/update/{id}', 'TravelController@update');
Route::get('/travel/hapus/{id}', 'TravelController@delete');
Route::get('/home_file', 'UploadController@index');
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/hapus/{id}', 'UploadController@hapus');
Route::get('/travel/travel_pdf', 'TravelController@index');
Route::get('/cetak_pdf', 'TravelController@cetak_pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
