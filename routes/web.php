<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftaranController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/datapasien', [PasienController::class, 'index']);
Route::post('/datapasienstore', [PasienController::class, 'store']);
Route::post('datapasienedit', [PasienController::class, 'edit']);
Route::post('/datapasienupdate', [PasienController::class, 'update']);
Route::post('datapasiendelete', [PasienController::class, 'destroy']);

Route::get('/datapelayanan', [PelayananController::class, 'index']);
Route::post('/datapelayananstore', [PelayananController::class, 'store']);
Route::post('datapelayananedit', [PelayananController::class, 'edit']);
Route::post('/datapelayananupdate', [PelayananController::class, 'update']);
Route::post('datapelayanandelete', [PelayananController::class, 'destroy']);

Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::post('/pendaftaranstore', [PendaftaranController::class, 'store']);
Route::post('/selesai/{pendaftaran:id}', [PendaftaranController::class, 'selesai']);
Route::post('pendaftarandelete', [PendaftaranController::class, 'destroy']);
Route::get('/printdata', [PendaftaranController::class, 'print']);
