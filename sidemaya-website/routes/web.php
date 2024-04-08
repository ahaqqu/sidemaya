<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DocumentFinalController;
use App\Http\Controllers\AjukanSuratController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\TemplateSuratController;
use App\Http\Controllers\KebijakanPrivacyController;
use App\Http\Controllers\tentangkamicontroller;



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
Route::get('/download/{file}', 'App\Http\Controllers\TemplateSuratController@download')->name('download');

Route::get('/kebijakan-privacy', 'App\Http\Controllers\KebijakanPrivacyController@view')->middleware(['auth', 'verified'])->name('kebijakanprivacy.view');
Route::get('/tentang-kami', 'App\Http\Controllers\tentangkamicontroller@view')->name('tentangkami.view');

Route::get('/upload', [FileController::class, 'showForm']);
Route::post('/upload', [FileController::class, 'uploadFile']);


Route::get('/daftar-surat', 'App\Http\Controllers\DaftarSuratController@view')->middleware(['auth', 'verified'])->name('daftarsurat.view');
Route::get('/documents/final/{uuid}', 'App\Http\Controllers\DocumentsFinalController@download')->middleware(['auth', 'verified'])->name('documentsfinal.download');
Route::post('/documents/final', 'App\Http\Controllers\DocumentsFinalController@upload')->middleware(['auth', 'verified'])->name('documentsfinal.upload');

Route::get('/laporan-keuangan', 'App\Http\Controllers\LaporanKeuanganController@view')->middleware(['auth', 'verified'])->name('laporankeuangan.view');
Route::get('/laporan-keuangan/{uuid}', 'App\Http\Controllers\LaporanKeuanganController@dokumen')->middleware(['auth', 'verified'])->name('laporankeuangan.dokumen');
Route::get('/laporan-keuangan/periode/{year}/{month}', 'App\Http\Controllers\LaporanKeuanganController@periode')->middleware(['auth', 'verified'])->name('laporankeuangan.periode');
Route::get('/kelola-laporan-keuangan', 'App\Http\Controllers\LaporanKeuanganController@admin')->middleware(['auth', 'verified', 'isAdmin'])->name('laporankeuangan.admin');
Route::post('/upload-laporan-keuangan', 'App\Http\Controllers\LaporanKeuanganController@upload')->middleware(['auth', 'verified', 'isAdmin'])->name('laporankeuangan.upload');


Route::get('/kegiatan', 'App\Http\Controllers\KegiatanController@index')->name('kegiatan.index');
Route::get('/kegiatan/{id}', 'App\Http\Controllers\KegiatanController@view')->name('kegiatan.view');



Route::get('/daftar-surat-warga', 'App\Http\Controllers\DaftarSuratWargaController@view')->middleware(['auth', 'verified', 'isAdmin'])->name('daftarsuratwarga.view');
Route::get('/documents/process/{uuid}', 'App\Http\Controllers\DownloadProcessController@download')->middleware(['auth', 'verified'])->name('documents.process');

Route::get('/proses-surat/{uuid}', 'App\Http\Controllers\ProsesSuratController@view')->middleware(['auth', 'verified'])->name('prosessurat.view');
Route::post('/ajukansurat/upload', 'App\Http\Controllers\AjukanSuratController@upload')->middleware(['auth', 'verified'])->name('ajukansurat.upload');
//Route::post('/documents/final', 'App\Http\Controllers\AjukanSuratController@upload')->middleware(['auth', 'verified'])->name('ajukansurat.upload');
//Route::post('/ajukansurat/upload',[AjukanSuratController::class, 'ajukansurat']); //route ajukan surat dan masuk ke DB


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

Route::get('/ajukansurat', function() {
    return view('ajukansurat');
})->middleware(['auth', 'verified'])->name('ajukansurat');

Route::post('/ajukansurat', 'App\Http\Controllers\UploadController@upload')->middleware(['auth', 'verified'])->name('file.upload');

Route::get('/download/{directory}/{filename}', 'App\Http\Controllers\DownloadController@download')->name('file.download');

require __DIR__.'/auth.php';


