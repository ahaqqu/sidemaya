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

Route::get('/download/{directory}/{filename}', 'App\Http\Controllers\DownloadController@download')->name('file.download');

