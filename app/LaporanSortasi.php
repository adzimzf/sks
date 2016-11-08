<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanSortasi extends Model {
	protected $table = 'laporanSortasi';
	protected $fillable = ['operator', 'jumlah', 'd100', 'd50', 'd20', 'd10', 'd5', 'd2', 'd1'];
}
