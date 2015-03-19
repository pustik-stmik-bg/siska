<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanKurikulumMatakuliahTable extends Migration {

	public function up()
	{
		Schema::create('jurusan_kurikulum_matakuliah', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('kode_kurikulum')->unsigned();
			$table->string('kode_matakuliah', 10);
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('jurusan_kurikulum_matakuliah');
	}
}