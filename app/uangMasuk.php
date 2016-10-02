<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uangMasuk extends Model {
	protected $table = 'uangMasuk';
	protected $fillable = ['jam', 'denom', 'jumlah', 'tanggal'];
}
