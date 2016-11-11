<?php

namespace App\Http\Controllers;

use App\teler;
use App\temuan;
use Illuminate\Http\Request;

class LaporanTemuanController extends Controller {
	public function index(Request $input) {
		$input->session()->forget("informasi");
		return view('laporan_temuan.index');
	}
	public function ajax() {
		$teler = temuan::all();
		$nomer = 1;
		$json = "";
		//tulis aray berisi json file
		foreach ($teler as $teler) {
			$json = $json .
			'{
    			"no":"' . $nomer . '",
    			"no_ba":"' . $teler->no_ba . '",
    			"tanggal_ditemukan":"' . $teler->tanggal_ditemukan . '",
    			"penyelia":"' . $teler->penyelia . '",
    			"manajer":"' . $teler->manajer . '",
    			"operator":"' . $teler->operator . '",
    			"saksi":"' . $teler->saksi . '",
    			"cabang":"' . $teler->cabang . '",
    			"teler":"' . $teler->teler . '",
    			"jam":"' . $teler->jam . '",
    			"tanggal_banbanan":"' . $teler->tanggal_banbanan . '",
    			"temuan":"' . $teler->temuan . '",
    			"denom":"' . $teler->denom . '",
    			"jumlah":"' . $teler->jumlah . '",
    			"no_seri":"' . $teler->no_seri . '",
    			"total":"' . $teler->total . '",
    			"aksi":"<a href=laporantemuan/edit/id/' . $teler->id . ' style=\"color:orange;\">edit</a>  <a href=laporantemuan/hapus/id/' . $teler->id . ' style=\"color:red;\">hapus</a>"
    		},';
			$nomer++;
		}
		//$json = rtrim($json, ",");
		$json = "[" . rtrim($json, ",") . "]";
		//echo $json;
		//echo response()->json($json);
		return $json;
	}
}
