<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LuController;

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

Route::get('/tambah_barang', [LuController::class, 'tambah_barang']);
Route::post('/tambah_barang', [LuController::class, 'input_barang']);
Route::get('/tampil_barang', [LuController::class, 'tampil_barang']);

Route::get('/hapus_barang/{id}', [LuController::class, 'hapus_barang']);
Route::get('/edit_barang/{id}', [LuController::class, 'edit_barang']);
Route::post('/edit_barang/{id}', [LuController::class, 'update_barang']);

Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});
