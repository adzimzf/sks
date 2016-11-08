<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class TabelLaporanSortasi extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('laporanSortasi', function (Blueprint $table) {
			$table->increments('id');
			$table->date('tanggal');
			$table->string('operator');
			$table->string('d100');
			$table->string('d50');
			$table->string('d20');
			$table->string('d10');
			$table->string('d5');
			$table->string('d2');
			$table->string('d1');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('laporanSortasi');
	}
}
