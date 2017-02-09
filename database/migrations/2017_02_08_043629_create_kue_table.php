<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('kue', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->string('gambar_pemesanan');
			$table->string('jeniskue');
			$table->string('rasa');
			$table->integer('harga');
			$table->string('jumlah');
			$table->string('total');
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
		Schema::drop('kue');
	}

}
