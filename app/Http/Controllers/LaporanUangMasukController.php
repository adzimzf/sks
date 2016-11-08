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
		$tabel->jumlah = str_replace(",", "", $input->jumlah);
		$tabel->tanggal = $input->tanggal;
		$tabel->save();
		return Redirect('laporan_uang_masuk');
	}
	public function isiUangKeluar(Request $input) {
		$tabel = new uangKeluar();
		$tabel->jam = $input->jam_keluar;
		$tabel->denom = $input->denom_keluar;
		$tabel->jumlah = str_replace(",", "", $input->jumlah_keluar);
		$tabel->tanggal = $input->tanggal_keluar;
		$tabel->save();
		return Redirect('laporan_uang_masuk');
	}
	public function isiTabelUangMasukAjax() {
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date("Y-m-d");
		$data = uangMasuk::where('tanggal', '=', $tgl)->get();
		$nomer = 1;
		$json = "";
		foreach ($data as $data) {
			$json = $json .
			'{
    			"jam":"' . $data->jam . '",
    			"denom":"' . $data->denom . '",
    			"jumlah":"' . $this->numFor($data->jumlah) . '",
    			"aksi":"<a href=\"#laporantemuan/edit/id/' . $data->id . '\" class=\"masuk\" data-toggle=\"modal\" data-target=\"#modal_edit\" style=\"color:orange;\">edit</a>  <a href=\"laporantemuan/hapus/id/' . $data->id . '/masuk\"  style=\"color:red;\">hapus</a>"
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
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date("Y-m-d");
		$data = uangKeluar::where('tanggal', '=', $tgl)->get();
		$nomer = 1;
		$json = "";
		foreach ($data as $data) {
			$json = $json .
			'{
    			"jam":"' . $data->jam . '",
    			"denom":"' . $data->denom . '",
    			"jumlah":"' . $this->numFor($data->jumlah) . '",
    			"aksi":"<a href=\"#laporantemuan/edit/id/' . $data->id . '\" class=\"keluar\" data-toggle=\"modal\" data-target=\"#modal_edit\" style=\"color:orange;\">edit</a>  <a href=\"laporantemuan/hapus/id/' . $data->id . '/keluar\" style=\"color:red;\">hapus</a>"
    		},';
			$nomer++;
		}
		//$json = rtrim($json, ",");
		$json = "[" . rtrim($json, ",") . "]";
		return ($json);
		//echo date_default_timezone_get();
		//echo $tgl;
		//echo "$tanggal";
		//echo $data;
		//echo $json;
	}
	public function numFor($string) {
		return number_format(floatval($string), 2, ".", ",");
	}
	public function editUangMasuk($id) {
		$data = uangMasuk::find($id);
		return "[$data]";
	}
	public function editUangKeluar($id) {
		$data = uangKeluar::find($id);
		return "[$data]";
	}
	public function editSimpanMasuk(Request $input, $id) {
		$tabel = uangMasuk::find($id);
		$tabel->jam = $input->modalJam;
		$tabel->denom = $input->modalDenom;
		$tabel->jumlah = str_replace(",", "", $input->modalJumlah);
		$tabel->update();
		return Redirect('laporan_uang_masuk');
	}
	public function editSimpanKeluar(Request $input, $id) {
		$tabel = uangKeluar::find($id);
		$tabel->jam = $input->modalJam;
		$tabel->denom = $input->modalDenom;
		$tabel->jumlah = str_replace(",", "", $input->modalJumlah);
		$tabel->update();
		return Redirect('laporan_uang_masuk');
	}
	public function hapusMasuk($id) {
		uangMasuk::where('id', '=', $id)->delete();
		return Redirect('laporan_uang_masuk');
	}
	public function hapusKeluar($id) {
		uangKeluar::where('id', '=', $id)->delete();
		return Redirect('laporan_uang_masuk');
	}
}
