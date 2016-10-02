<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class BuatTabelUangKeluar extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('uangKeluar', function (Blueprint $table) {
			$table->increments('id');
			$table->time('jam');
			$table->string('denom');
			$table->string('tanggal');
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
		Schema::drop('uangKeluar');
	}
}
