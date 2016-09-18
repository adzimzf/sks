<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LaporanTemuan extends Controller
{
    public function index(){
    	return view('laporan_temuan.index');
    }
}
