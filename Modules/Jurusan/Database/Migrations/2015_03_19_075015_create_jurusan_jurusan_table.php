<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanJurusanTable extends Migration {

	public function up()
	{
		Schema::create('jurusan_jurusan', function(Blueprint $table) {
			$table->string('kode_jurusan', 2)->primary();
			$table->string('nama_jurusan', 20);
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('jurusan_jurusan');
	}
}