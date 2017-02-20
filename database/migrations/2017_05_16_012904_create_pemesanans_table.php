<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pemesanans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->string('gambar_pemesanan');
			$table->string('alamat');
			$table->string('telepon');
			$table->string('email');
			$table->string('pukul');
			$table->string('hari');
			$table->string('jeniskue');
			$table->string('rasa');
			$table->string('jumlah');
			$table->string('total');
			$table->string('no_pesanan');
			$table->string('status');
			$table->integer('kue_id')->unsigned();
			$table->foreign('kue_id')->references('id')->on('kue')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('pemesanans');
	}

}
