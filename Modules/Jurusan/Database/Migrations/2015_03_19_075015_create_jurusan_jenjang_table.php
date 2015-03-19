<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanJenjangTable extends Migration {

	public function up()
	{
		Schema::create('jurusan_jenjang', function(Blueprint $table) {
			$table->string('kode_jenjang', 1)->primary();
			$table->string('nama_jenjang', 2)->unique();
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('jurusan_jenjang');
	}
}