<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\BankController;
use App\Http\Controllers\DetailMasjidController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\MasjidController;
use App\Http\Controllers\ProfilMasjid;
use App\Http\Controllers\KagiatanController;
use App\Http\Controllers\PengurusController;


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

Route::get('/', [WebController::class, 'index'])->name('halamanutama');
Route::get('detailmasjid/{id}', [WebController::class, 'detailmasjid'])->name('detailmasjid');
Route::get('profilmasjid', [ProfilMasjid::class, 'index'])->name('profilmasjid');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profiluser', [UserController::class, 'profil'])->name('profiluser');

// user
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/add', [UserController::class, 'add']);
Route::post('/user/insert', [UserController::class, 'insert']);
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [UserController::class, 'delete']);

// * Halaman User


// kategory
Route::get('/kategory', [KategoryController::class, 'index'])->name('kategory');
Route::get('/kategory/tambah', [KategoryController::class, 'add']);
Route::post('/kategory/insert', [KategoryController::class, 'insert']);
Route::get('/kategory/edit/{id_kategory}', [KategoryController::class, 'edit']);
Route::post('/kategory/update/{id_kategory}', [KategoryController::class, 'update']);
Route::get('/kategory/delete/{id_kategory}', [KategoryController::class, 'delete']);

// Bank
Route::get('/bank', [BankController::class, 'index'])->name('bank');
Route::get('/bank/add', [BankController::class, 'add']);
Route::post('/bank/insert', [BankController::class, 'insert']);
Route::get('/bank/edit/{id_bank}', [BankController::class, 'edit']);
Route::post('/bank/update/{id_bank}', [BankController::class, 'update']);
Route::get('/bank/delete/{id_bank}', [BankController::class, 'delete']);

// masjid
Route::get('/masjid', [MasjidController::class, 'index'])->name('masjid');
Route::get('/masjid/tambah', [MasjidController::class, 'add']);
Route::post('/masjid/insert', [MasjidController::class, 'insert']);
Route::get('/masjid/edit/{id_masjid}', [MasjidController::class, 'edit']);
Route::post('/masjid/update/{id_masjid}', [MasjidController::class, 'update']);
Route::get('/masjid/delete/{id_masjid}', [MasjidController::class, 'delete']);
Route::get('masjid/detailmasjid/{id_masjid}', [MasjidController::class, 'detailmasjid'])->name('detailmasjid');

// kagiatan
Route::get('/kegiatan', [KagiatanController::class, 'index'])->name('kegiatan');
Route::get('/kegiatan/insert', [KagiatanController::class, 'insert']);
Route::post('/kegiatan/store', [KagiatanController::class, 'store']);
Route::get('/kegiatan/edit/{id}', [KagiatanController::class, 'edit']);
Route::post('/kegiatan/update/{id}', [KagiatanController::class, 'update']);
Route::get('/kegiatan/delete/{id}', [KagiatanController::class, 'destroy']);
Route::get('/kegiatan/detailkegiatan/{id}', [KagiatanController::class, 'detailkegiatan'])->name('detailkegiatan');


// fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitas/insert', [FasilitasController::class, 'insert']);
Route::post('/fasilitas/store', [FasilitasController::class, 'store']);
Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
Route::post('/fasilitas/update/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
Route::get('/fasilitas/delete/{id}', [FasilitasController::class, 'destroy']);
Route::get('fasilitas/detailfasilitas/{id}', [FasilitasController::class, 'detailfasilitas'])->name('detailfasilitas');

// pengurus

Route::get('/pengurus', [PengurusController::class, 'index'])->name('pengurus');
Route::get('/pengurus/insert', [PengurusController::class, 'insert']);
Route::post('/pengurus/store', [PengurusController::class, 'store']);
Route::get('/pengurus/edit/{id}', [PengurusController::class, 'edit'])->name('pengurus.edit');
Route::post('/pengurus/update/{id}', [PengurusController::class, 'update'])->name('pengurus.update');
Route::get('/pengurus/delete/{id}', [PengurusController::class, 'destroy']);
Route::get('pengurus/detailpengurus/{id}', [PengurusController::class, 'detailpengurus'])->name('detailpengurus');
