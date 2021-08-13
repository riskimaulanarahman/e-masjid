<?php

use App\Http\Controllers\ApiBankController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiKategoryController;
use App\Http\Controllers\ApiMasjidController;
use App\Http\Controllers\ApiKegiatanController;
use App\Http\Controllers\ApiPengurusController;
use App\Http\Controllers\ApiFasilitasController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// kategory
Route::get('/kategory', [ApiKategoryController::class, 'index'])->name('kategory');
// Route::get('/kategory/tambah', [ApiKategoryController::class, 'add']);
// Route::post('/kategory/insert', [ApiKategoryController::class, 'insert']);
// Route::get('/kategory/edit/{id_kategory}', [ApiKategoryController::class, 'edit']);
Route::get('/kategory/{id_kategory}', [ApiKategoryController::class, 'show']);
// Route::post('/kategory/update/{id_kategory}', [ApiKategoryController::class, 'update']);
// Route::get('/kategory/delete/{id_kategory}', [ApiKategoryController::class, 'delete']);

// Bank
Route::get('/bank', [ApiBankController::class, 'index'])->name('bank');
// Route::post('/bank/insert', [ApiBankController::class, 'insert']);
// Route::get('/bank/edit/{id_bank}', [ApiBankController::class, 'edit']);
// Route::post('/bank/update/{id_bank}', [ApiBankController::class, 'update']);
// Route::get('/bank/delete/{id_bank}', [ApiBankController::class, 'delete']);

// masjid
Route::get('/masjid', [ApiMasjidController::class, 'index'])->name('masjid');
// Route::get('/masjid/tambah', [ApiMasjidController::class, 'add']);
// Route::post('/masjid/insert', [ApiMasjidController::class, 'insert']);
// Route::get('/masjid/edit/{id_masjid}', [ApiMasjidController::class, 'edit']);
Route::get('/masjid/{id_masjid}', [ApiMasjidController::class, 'show']);
// Route::post('/masjid/update/{id_masjid}', [ApiMasjidController::class, 'update']);
// Route::get('/masjid/delete/{id_masjid}', [ApiMasjidController::class, 'delete']);
// Route::get('masjid/detailmasjid/{id_masjid}', [ApiMasjidController::class, 'detailmasjid'])->name('detailmasjid');

Route::get('/kegiatan', [ApiKegiatanController::class, 'index'])->name('kegiatan');
Route::get('/kegiatan/{id}', [ApiKegiatanController::class, 'show']);
Route::get('/fasilitas', [ApiFasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitas/{id}', [ApiFasilitasController::class, 'show']);
Route::get('/pengurus', [ApiPengurusController::class, 'index'])->name('pengurus');
Route::get('/pengurus/{id}', [ApiPengurusController::class, 'show']);
