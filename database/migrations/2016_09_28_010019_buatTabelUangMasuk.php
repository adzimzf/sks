<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class BuatTabelUangMasuk extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('uangMasuk', function (Blueprint $table) {
			$table->increments('id');
			$table->time('jam');
			$table->string('tanggal');
			$table->string('denom');
			$table->integer('jumlah');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('uangMasuk');
	}
}
