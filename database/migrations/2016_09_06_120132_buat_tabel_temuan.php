<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelTemuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temuan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('no_ba');
            $table->date('tanggal_ditemukan');
            $table->date('tanggal_banbanan');
            $table->time('jam');
            $table->string('penyelia');
            $table->string('manajer');
            $table->string('operator');
            $table->string('saksi');
            $table->string('cabang');
            $table->string('teler');
            $table->string('temuan');
            $table->integer('denom');
            $table->integer('jumlah');
            $table->string('no_seri');
            $table->decimal('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('temuan');   
    }
}
