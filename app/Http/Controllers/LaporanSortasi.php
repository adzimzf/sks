<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\LaporanSortasi;

class LaporanSortasi extends Controller {
	public function index() {
		return view('laporanSortasi.index');
	}
	public function simpan(Request $input){
		$db1 = LaporanSortasi::all();
		$d = $this->isAda($db1,$input->tanggal,$input->operator);
		if ($d) {
			//menambahkan data
			$operator = $input->operator;
			$tanggal= $input->tanggal;
			$db = LaporanSortasi::where('operator','=',"$operator")->where('tanggal','=',"$tanggal")->first();
			$this->isDenom($db, $input->denom, str_replace(",","",$input->jumlah));
			// echo "sudah ada";
			if ($db->save()) {
				return redirect("laporanSortasi");
			}
		}else{// data belum ada di BD
			$db = new LaporanSortasi();
			$db->tanggal = $input->tanggal;
			$db->operator = $input->operator;
			$this->isDenom($db, $input->denom, str_replace(",","",$input->jumlah));
			// echo "belum ada";
			if ($db->save()) {
				return redirect("laporanSortasi");
			}
		}
	}
	public function hapus($id){
		LaporanSortasi::where('id', '=', $id)->delete();
		return Redirect('laporanSortasi');
	}
	function isDenom($db, $denom, $jumlah){
		switch ($denom) {
			case '100000':
				$db->d100 = $jumlah;
				break;
			case '50000':
				$db->d50 = $jumlah;
				break;
			case '20000':
				$db->d20 = $jumlah;
				break;
			case '10000':
				$db->d10 = $jumlah;
				break;
			case '5000':
				$db->d5 = $jumlah;
				break;
			case '2000':
				$db->d2 = $jumlah;
				break;
			case '1000':
				$db->d1 = $jumlah;
				break;
			default :
				echo "denom salah";
				break;
		}
	}
	function isAda($data, $tanggal, $nama){
		foreach ($data as $data) {
			if ($data->tanggal== $tanggal && $data->operator==$nama) {
				return true;
			}
		}
		return false;
	}
	public function isiDataAPI($tanggal){
		$db = LaporanSortasi::where("tanggal",'=',"$tanggal")->get();
		$json="";

		foreach ($db as $db) {
			// echo $this->numFor($db->d100);
			$json .= '{"operator":"'.$db->operator.'","d100":"'.$this->numFor($db->d100).'","d50":"'.$this->numFor($db->d50).'","d20":"'.$this->numFor($db->d20).'","d10":"'.$this->numFor($db->d10).'","d5":"'.$this->numFor($db->d5).'","d2":"'.$this->numFor($db->d2).'","d1":"'.$this->numFor($db->d1).'","aksi":"<a href=\"laporanSortasi/hapus/'.$db->id.'\">Hapus</a>"},';

			// $json .= '{"operator":"'.$db->operator.'","d100":"'.$db->d100.'","d50":"'.$db->d50.'","d20":"'.$db->d20.'","d10":"'.$db->d10.'","d5":"'.$db->d5.'","d2":"'.$db->d2.'","d1":"'.$db->d1.'","aksi":"edit hapus"},';
		}
		$json = "[" . rtrim($json, ",") . "]";
		return $json;
	}
	public function numFor($string){
		return number_format(floatval($string), 2, ".", ",");
	}
}
