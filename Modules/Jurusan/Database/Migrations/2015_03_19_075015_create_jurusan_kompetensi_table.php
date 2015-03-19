<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanKompetensiTable extends Migration {

	public function up()
	{
		Schema::create('jurusan_kompetensi', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('kode_nama_jurusan')->unsigned();
			$table->string('kode_kompetensi', 2);
			$table->string('nama_kompetensi', 50);
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('jurusan_kompetensi');
	}
}