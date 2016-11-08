<?php

namespace App\Http\Controllers;
use App\cabang;
use App\manajer;
use App\operator;
use App\penyelia;
use App\teler;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller {
	public function index() {
		$operator = operator::all();
		$penyelia = penyelia::all();
		$manajer = manajer::all();
		$cabang = cabang::all();
		$teler = teler::all();
		$no = 1;
		return view('dataPegawai.index')->with([
			"no" => $no,
			"operator" => $operator,
			"penyelia" => $penyelia,
			"manajer" => $manajer,
			"cabang" => $cabang,
			"teler" => $teler,
		]);
	}
	public function simpanManager(Request $input) {
		$db = new manajer();
		$nama = $input->nama;
		$npp = $input->npp;
		$db->nama = $nama;
		$db->npp = $npp;
		if ($db->save()) {
			return redirect("dataPegawai");
		}
	}
	public function hapusManager($id) {
		$db = manajer::find($id);
		if (!is_null($db)) {
			$db->delete();

		}
		return redirect("dataPegawai");
	}
	public function editManager($id) {
		$db = manajer::find($id);
		return $db;
	}
	public function updateManager($id, Request $input) {
		$db = manajer::find($id);
		$db->nama = $input->nama;
		$db->npp = $input->npp;
		// echo $input->npp;
		if ($db->save()) {
			return redirect("dataPegawai");
		}
	}

	//penyelia
	public function simpanPenyelia(Request $input) {
		$db = new penyelia();
		$nama = $input->nama;
		$npp = $input->npp;
		$db->nama = $nama;
		$db->npp = $npp;
		if ($db->save()) {
			return redirect("dataPegawai");
		}
	}
	public function editPenyelia($id) {
		$db = penyelia::find($id);
		return $db;
	}
	public function updatePenyelia($id, Request $input) {
		$db = penyelia::find($id);
		$db->nama = $input->nama;
		$db->npp = $input->npp;
		// echo $input->npp;
		if ($db->save()) {
			return redirect("dataPegawai");
		}
	}
	public function hapusPenyelia($id) {
		$db = penyelia::find($id);
		if (!is_null($db)) {
			$db->delete();

		}
		return redirect("dataPegawai");

	}
	//operator
	public function simpanOperator(Request $input) {
		$db = new operator();
		$nama = $input->nama;
		$npp = $input->npp;
		$db->nama = $nama;
		$db->npp = $npp;
		if ($db->save()) {
			return redirect("dataPegawai");
		}
	}
	public function editOperator($id) {
		$db = operator::find($id);
		return $db;
	}
	public function updateOperator($id, Request $input) {
		$db = operator::find($id);
		$db->nama = $input->nama;
		$db->npp = $input->npp;
		// echo $input->npp;
		if ($db->save()) {
			return redirect("dataPegawai");
		}
	}
	public function hapusOperator($id) {
		$db = operator::find($id);
		if (!is_null($db)) {
			$db->delete();

		}
		return redirect("dataPegawai");

	}
	//operator
	public function simpanCabang(Request $input) {
		$db = new cabang();
		$db->nama = $input->nama;
		if ($db->save()) {
			return redirect("dataPegawai");
		}
	}
	public function editCabang($id) {
		$db = cabang::find($id);
		return $db;
	}
	public function updateCabang($id, Request $input) {
		$db = cabang::find($id);
		$db->nama = $input->nama;
		// echo $input->npp;
		if ($db->save()) {
			return redirect("dataPegawai");
		}
	}
}
