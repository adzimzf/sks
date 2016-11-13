<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller {
	public function index() {
		return view('profil.index');
	}
	public function update(Request $input) {
		$pass = $input->password;
		if (Auth::attempt(['username' => $input->username, 'password' => $pass])) {
			$data = User::find($input->id);
			$data->name = $input->name;
			$data->username = $input->username;
			$data->email = $input->email;
			// Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
			//cek apakah user mengganti foto atau tidak
			if (!empty($input->foto)) {
				$file = $input->file('foto');
				$fileExt = $file->getClientOriginalExtension();
				$fileName = Auth::user()->username . "-dp." . $fileExt;
				$input->file('foto')->move("dist/img/", $fileName);
				$data->foto = $fileName;
			}

			if ($data->update()) {
				return redirect('profil')->with('success', 'Data yang anda  perbaharui berhasil');
			}
		} else {
			return redirect('profil')->with('error', 'Password yang anda masukan salah, coba lagi!');
		}

	}
}
