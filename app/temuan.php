<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class temuan extends Model
{
    protected $table = 'temuan';
	protected $fillable =['cabang', 'denom', 'jumlah', 'manajer', 'no_seri', 'oprator', 'penyelia', 'saksi', 'teler', 'temuan','total', 'jam', 'no_ba', 'tanggal_ditemukan', 'tanggal_banbanan'];
}
