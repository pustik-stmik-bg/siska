<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanKurikulumTable extends Migration {

	public function up()
	{
		Schema::create('jurusan_kurikulum', function(Blueprint $table) {
			$table->increments('kode_kurikulum');
			$table->string('nama_kurikulum', 4);
			$table->enum('status', array('A', 'N'))->default('N');
			$table->smallInteger('sks_wajib');
			$table->smallInteger('sks_pilihan');
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('jurusan_kurikulum');
	}
}