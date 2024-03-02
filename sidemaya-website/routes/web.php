<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layanan-umum', function() {
    return view('layanan-umum');
});

Route::post('/layanan-umum', 'App\Http\Controllers\UploadController@upload')->name('file.upload');

Route::get('/download/{directory}/{filename}', 'App\Http\Controllers\DownloadController@download')->name('file.download');

