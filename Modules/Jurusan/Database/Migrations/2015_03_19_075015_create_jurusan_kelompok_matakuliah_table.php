<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanKelompokMatakuliahTable extends Migration {

	public function up()
	{
		Schema::create('jurusan_kelompok_matakuliah', function(Blueprint $table) {
			$table->string('kode_kelompok', 4)->primary();
			$table->string('nama_kelompok', 50);
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('jurusan_kelompok_matakuliah');
	}
}