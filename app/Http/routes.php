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
Route::get('ambilDataTelerApi', 'TulisBaController@ambilDataTelerApi');

Route::get('laporantemuan', 'LaporanTemuanController@index');
Route::get('laporantemuanajax', 'LaporanTemuanController@ajax');

Route::get('laporan_uang_masuk', 'LaporanUangMasukController@index');

Route::get('datatables', function () {
	return view('laporan_temuan.contoh');
});

Route::post('isiUangMasuk', 'LaporanUangMasukController@isiUangMasuk');
Route::post('isiUangKeluar', 'LaporanUangMasukController@isiUangKeluar');
Route::get('isiTabelUangMasukAjax', 'LaporanUangMasukController@isiTabelUangMasukAjax');
Route::get('isiTabelUangKeluarAjax', 'LaporanUangMasukController@isiTabelUangKeluarAjax');