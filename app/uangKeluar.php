<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uangKeluar extends Model {
	protected $table = 'uangKeluar';
	protected $fillable = ['jam', 'denom', 'jumlah', 'tanggal'];
}
