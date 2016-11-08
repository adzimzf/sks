<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
	return view('welcome');
});
Route::get('productajaxCRUD', function () {
	$products = App\Product::all();
	return view('ajax.index')->with('products', $products);
});
Route::get('productajaxCRUD/{product_id?}', function ($product_id) {
	$product = App\Product::find($product_id);
	return response()->json($product);
});
Route::post('productajaxCRUD', function (Request $request) {
	$product = App\Product::create($request->input());
	return response()->json($product);
});
Route::put('productajaxCRUD/{product_id?}', function (Request $request, $product_id) {
	$product = App\Product::find($product_id);
	$product->name = $request->name;
	$product->details = $request->details;
	$product->save();
	return response()->json($product);
});
Route::delete('productajaxCRUD/{product_id?}', function ($product_id) {
	$product = App\Product::destroy($product_id);
	return response()->json($product);
});

/*
+-------------------------------------------------------------------------------
|               BNI-SKS
|Routing untuk aplikasi BNI-SKS
+-------------------------------------------------------------------------------
 */
Route::get('BNI', function () {
	return view('master.master');
});
Route::get('tulisba', 'TulisBaController@index');
Route::post('cetak', 'TulisBaController@cetak');
Route::post('cetakPDF', 'TulisBaController@cetakPDF');
Route::post('tambah_teler', 'TulisBaController@tambah_teler');
Route::get('ambilDataTelerApi/cabang/{id?}', 'TulisBaController@ambilDataTelerApi');

Route::get('laporantemuan', 'LaporanTemuanController@index');
Route::get('laporantemuanajax', 'LaporanTemuanController@ajax');

Route::get('laporan_uang_masuk', 'LaporanUangMasukController@index');
Route::get('laporantemuan/edit/id/{id?}/masuk', 'LaporanUangMasukController@editUangMasuk');
Route::get('laporantemuan/edit/id/{id?}/keluar', 'LaporanUangMasukController@editUangKeluar');

Route::post('laporantemuan/edit/id/{id?}/simpanMasuk', 'LaporanUangMasukController@editSimpanMasuk');
Route::post('laporantemuan/edit/id/{id?}/simpanKeluar', 'LaporanUangMasukController@editSimpanKeluar');

Route::get('laporantemuan/hapus/id/{id?}/masuk', 'LaporanUangMasukController@hapusMasuk');
Route::get('laporantemuan/hapus/id/{id?}/keluar', 'LaporanUangMasukController@hapusKeluar');
Route::get('datatables', function () {
	return view('laporan_temuan.contoh');
});

// Laoran Sortasi
Route::get('laporanSortasi', 'LaporanSortasi@index');
Route::post('laporanSortasi/simpan', 'LaporanSortasi@simpan');
Route::get('laporanSortasi/isiDataAPI/{tanggal?}', 'LaporanSortasi@isiDataAPI');
//laporan sortasi hapus
Route::get('laporanSortasi/hapus/{id?}', 'LaporanSortasi@hapus');

Route::post('isiUangMasuk', 'LaporanUangMasukController@isiUangMasuk');
Route::post('isiUangKeluar', 'LaporanUangMasukController@isiUangKeluar');
Route::get('laporan_uang_masuk/isiTabelUangMasukAjax', 'LaporanUangMasukController@isiTabelUangMasukAjax');
Route::get('laporan_uang_masuk/isiTabelUangKeluarAjax', 'LaporanUangMasukController@isiTabelUangKeluarAjax');

//route data pegawai
Route::get('dataPegawai', 'DataPegawaiController@index');
Route::post('simpanManager', 'DataPegawaiController@simpanManager');

//edit data manager
Route::get('dataPegawai/editManager/{id?}', 'DataPegawaiController@editManager');

//update data manager
Route::post('dataPegawai/editManager/{id?}/update', 'DataPegawaiController@updateManager');
//hapus data manager
Route::get('dataPegawai/hapusManager/{id?}', 'DataPegawaiController@hapusManager');

//simpan data penyelia
Route::post('simpanPenyelia', 'DataPegawaiController@simpanPenyelia');

//edit data penyelia
Route::get('dataPegawai/editPenyelia/{id?}', 'DataPegawaiController@editPenyelia');
//update data penyelia
Route::post('dataPegawai/editPenyelia/{id?}/update', 'DataPegawaiController@updatePenyelia');
//hapus data manager
Route::get('dataPegawai/hapusPenyelia/{id?}', 'DataPegawaiController@hapusPenyelia');

//simpan data operator
Route::post('simpanOperator', 'DataPegawaiController@simpanOperator');

//edit data operator
Route::get('dataPegawai/editOperator/{id?}', 'DataPegawaiController@editOperator');
//update data operator
Route::post('dataPegawai/editOperator/{id?}/update', 'DataPegawaiController@updateOperator');
//hapus data manager
Route::get('dataPegawai/hapusOperator/{id?}', 'DataPegawaiController@hapusOperator');
//simpan data cabang
Route::post('simpanCabang', 'DataPegawaiController@simpanCabang');
//edit data cabang
Route::get('dataPegawai/editCabang/{id?}', 'DataPegawaiController@editCabang');
//update data cabang
Route::post('dataPegawai/editCabang/{id?}/update', 'DataPegawaiController@updateCabang');