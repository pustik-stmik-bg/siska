<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanMatakuliahTable extends Migration {

	public function up()
	{
		Schema::create('jurusan_matakuliah', function(Blueprint $table) {
			$table->string('kode_matakuliah', 10)->primary();
			$table->string('nama_matakuliah', 75);
			$table->tinyInteger('sks_teori');
			$table->tinyInteger('sks_praktek');
			$table->tinyInteger('sks_praktikum');
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('jurusan_matakuliah');
	}
}