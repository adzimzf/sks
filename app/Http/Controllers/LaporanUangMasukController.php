<?php

namespace App\Http\Controllers;

use App\uangKeluar;
use App\uangMasuk;
use Illuminate\Http\Request;

class LaporanUangMasukController extends Controller {
	public function index() {
		return view('laporan_uang_masuk.index');
	}
	public function isiUangMasuk(Request $input) {
		$tabel = new uangMasuk();
		$tabel->jam = $input->jam;
		$tabel->denom = $input->denom;
		$tabel->jumlah = $input->jumlah;
		$tabel->tanggal = $input->tanggal;
		$tabel->save();
		return Redirect('laporan_uang_masuk');
	}
	public function isiUangKeluar(Request $input) {
		$tabel = new uangKeluar();
		$tabel->jam = $input->jam_keluar;
		$tabel->denom = $input->denom_keluar;
		$tabel->jumlah = $input->jumlah_keluar;
		$tabel->tanggal = $input->tanggal_keluar;
		$tabel->save();
		return Redirect('laporan_uang_masuk');
	}
	public function isiTabelUangMasukAjax() {
		$tgl = date("Y-m-d");
		$data = uangMasuk::where('tanggal', '=', $tgl)->get();
		$nomer = 1;
		$json = "";
		foreach ($data as $data) {
			$json = $json .
			'{
    			"jam":"' . $data->jam . '",
    			"denom":"' . $data->denom . '",
    			"jumlah":"' . $data->jumlah . '",
    			"aksi":"<a href=laporantemuan/edit/id/' . $data->id . ' style=\"color:orange;\">edit</a>  <a href=laporantemuan/hapus/id/' . $data->id . ' style=\"color:red;\">hapus</a>"
    		},';
			$nomer++;
		}
		//$json = rtrim($json, ",");
		$json = "[" . rtrim($json, ",") . "]";
		return ($json);
		//echo $tgl;
		//echo $data;
	}
	public function isiTabelUangKeluarAjax() {
		$tgl = date("Y-m-d");
		$data = uangKeluar::where('tanggal', '=', $tgl)->get();
		$nomer = 1;
		$json = "";
		foreach ($data as $data) {
			$json = $json .
			'{
    			"jam":"' . $data->jam . '",
    			"denom":"' . $data->denom . '",
    			"jumlah":"' . $data->jumlah . '",
    			"aksi":"<a href=laporantemuan/edit/id/' . $data->id . ' style=\"color:orange;\">edit</a>  <a href=laporantemuan/hapus/id/' . $data->id . ' style=\"color:red;\">hapus</a>"
    		},';
			$nomer++;
		}
		//$json = rtrim($json, ",");
		$json = "[" . rtrim($json, ",") . "]";
		return ($json);
		//echo $tgl;
		//echo $data;
	}
}
