<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\temuan;
use App\penyelia;
use App\manajer;
use App\operator;
use App\cabang;
use App\teler;

class TulisBaController extends Controller
{
    
    protected $informasi ="";
    public function index(){
        //$data = temuan::orderBy('id', 'desc')->first();
        //nama2 teller, operator, saksi, manajer, penyelia dimasukan ke view disini
        $penyelia=penyelia::all();
        $manajer=manajer::all();
        $operator=operator::all();
        $saksi = operator::all();
        $cabang=cabang::all();
        $teler=teler::all();
        $data=temuan::all()->last();
        return view('tulis_ba.tes')->with(['data'=>$data, 'penyelia'=>$penyelia, 'manajer'=>$manajer,'operator'=>$operator, 'cabang'=>$cabang, 'teler'=>$teler, 'saksi'=>$saksi]);
    }
    public function cetak(Request $input)
    {	
        //delete session
        $input->session()->forget("informasi");
    	//created variabel with input name
    	$no_ba 		= $input->no_ba;
    	$tanggal_ditemukan = $input->tanggal_ditemukan;
    	$penyelia 	= $input->penyelia;
    	$manager 	= $input->manager;
    	$operator	=$input->operator;
    	$saksi 		= $input->saksi;
    	$cabang		=$input->cabang;
    	$teler 		= "";
    	$jam		=$input->jam;
    	$denom 		= $input->denom;
    	$tanggal_ban_banan=$input->tanggal_ban_banan;
    	$ditemukan 	= $input->temuan;
    	$jumlah 	=$input->jumlah;
    	$no_seri	=$input->no_seri;
    	$total 		=$input->total;
            foreach($input->teler as $te)
            {   
                $teler =$teler."$te, ";
            }
            //define apakah akan di print atau di render ke pdf
            $data = $input->btn;
            if ($data == "print") {
                //insert into DB
                $temuan = new temuan;
                $temuan->tanggal_ditemukan=$tanggal_ditemukan;
                $temuan->penyelia   =$penyelia;
                $temuan->manajer    =$manager;
                $temuan->operator   =$operator;
                $temuan->saksi      =$saksi;
                $temuan->cabang     =$cabang;
                $temuan->teler      =$teler;
                $temuan->jam        =$jam;
                $temuan->denom      =$denom;
                $temuan->tanggal_banbanan=$tanggal_ban_banan;
                $temuan->temuan     =$ditemukan;
                $temuan->jumlah     =$jumlah;
                $temuan->no_seri    =$no_seri;
                $temuan->total      =$total;
                $temuan->save();
                if ($temuan->save()) {
                    //echo " succes menyimpan $tanggal_ditemukan $penyelia $manager $operator $saksi $cabang $teler $jam $denom $tanggal_ban_banan $operator $ditemukan $jumlah $no_seri $total ";
                    //create session informasi
                    $input->session()->put("informasi","Data Berita Acara berhasil dicetak dan disimpan");
                    return view('tulis_ba.cetak')->with(['tanggal_ditemukan'=>$tanggal_ditemukan, 'penyelia'=>$penyelia, 'manager'=>$manager, 'operator'=>$operator, 'saksi'=>$saksi, 'cabang'=>$cabang, 'teler'=>$teler, 'jam'=>$jam, 'denom'=>$denom, 'tanggal_ban_banan'=>$tanggal_ban_banan, 'temuan'=>$temuan, 'jumlah'=>$jumlah, 'no_seri'=>$no_seri, 'total'=>$total]);
                }
            }else{
                echo "akan di render ke pdf";
            }
        
    	
    }
}
