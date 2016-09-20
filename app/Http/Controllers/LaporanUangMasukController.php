<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LaporanUangMasukController extends Controller
{
    public function index(){
    	return view('laporan_uang_masuk.index');
    }
}
