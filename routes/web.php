<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\TransaksiController;

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
    return view('template.base');
});
Route::get('/nasabah', [NasabahController::class, 'view'])->name('nasabah');
Route::post('/addNasabah', [NasabahController::class, 'addNasabah'])->name('addNasabah');

Route::get('/transaksi', [TransaksiController::class, 'view'])->name('transaksi');
Route::post('/addtransaksi', [TransaksiController::class, 'addtransaksi'])->name('addtransaksi');

Route::get('/poin', [PoinController::class, 'view'])->name('poin');
Route::get('/report', [ReportController::class, 'view'])->name('report');
Route::get('/SearchReport', [ReportController::class, 'SearchReport'])->name('SearchReport');