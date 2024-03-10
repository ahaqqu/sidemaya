<?php

use App\Http\Controllers\ProfileController;
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
})->name('home');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/document/files/{directory}/{type}/{filename}', 'App\Http\Controllers\DocumentController@download')->name('document.download');

Route::get('/document', 'App\Http\Controllers\DocumentController@table')->middleware(['auth', 'verified'])->name('document.table');
Route::get('/template-surat', 'App\Http\Controllers\TemplateSuratController@view')->middleware(['auth', 'verified'])->name('templatesurat.view');
Route::get('/daftar-surat', 'App\Http\Controllers\DaftaSuratController@view')->middleware(['auth', 'verified'])->name('daftarsurat.view');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/layanan-umum', function() {
    return view('layanan-umum');
})->name('layanan-umum');

Route::post('/layanan-umum', 'App\Http\Controllers\UploadController@upload')->name('file.upload');

Route::get('/layanan-administrasi', function() {
    return view('layanan-administrasi');
})->name('layanan-administrasi');

Route::post('/layanan-administrasi', 'App\Http\Controllers\UploadController@upload')->name('file.upload');

Route::get('/download/{directory}/{filename}', 'App\Http\Controllers\DownloadController@download')->name('file.download');

require __DIR__.'/auth.php';


