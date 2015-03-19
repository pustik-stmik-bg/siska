<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanNamaJurusanTable extends Migration {

	public function up()
	{
		Schema::create('jurusan_nama_jurusan', function(Blueprint $table) {
			$table->increments('kode_nama_jurusan');
			$table->string('kode_jenjang', 1);
			$table->string('kode_jurusan', 2);
			$table->string('nama_jurusan', 80);
			$table->string('singkatan_jurusan', 8);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('jurusan_nama_jurusan');
	}
}