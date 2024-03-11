<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DocumentFinalController;


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
Route::get('/upload', [FileController::class, 'showForm']);
Route::post('/upload', [FileController::class, 'uploadFile']);


Route::get('/daftar-surat', 'App\Http\Controllers\DaftarSuratController@view')->middleware(['auth', 'verified'])->name('daftarsurat.view');
Route::get('/documents/final/{uuid}', 'App\Http\Controllers\DocumentsFinalController@download')->middleware(['auth', 'verified'])->name('documentsfinal.download');
Route::post('/documents/final', 'App\Http\Controllers\DocumentsFinalController@upload')->middleware(['auth', 'verified'])->name('documentsfinal.upload');


Route::get('/daftar-surat-warga', 'App\Http\Controllers\DaftarSuratWargaController@view')->middleware(['auth', 'verified'])->name('daftarsuratwarga.view');
Route::get('/documents/process/{uuid}', 'App\Http\Controllers\DownloadProcessController@download')->middleware(['auth', 'verified'])->name('documents.process');

Route::get('/proses-surat/{uuid}', 'App\Http\Controllers\ProsesSuratController@view')->middleware(['auth', 'verified'])->name('prosessurat.view');

Route::get('/ajukansurat', 'App\Http\Controllers\AjukanSuratController@view')->middleware(['auth', 'verified'])->name('ajukansurat.view');
Route::post('/upload', 'AjukanSuratController@view')->name('ajukansurat.view');



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

Route::get('/ajukan-surat', function() {
    return view('ajukan-surat');
})->name('ajukan-surat');

Route::post('/ajukan-surat', 'App\Http\Controllers\UploadController@upload')->name('file.upload');

Route::get('/download/{directory}/{filename}', 'App\Http\Controllers\DownloadController@download')->name('file.download');

require __DIR__.'/auth.php';


