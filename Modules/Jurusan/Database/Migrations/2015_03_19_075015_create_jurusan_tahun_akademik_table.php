<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanTahunAkademikTable extends Migration {

	public function up()
	{
		Schema::create('jurusan_tahun_akademik', function(Blueprint $table) {
			$table->increments('kode_tahun_akademik');
			$table->string('tahun_akademik', 9);
			$table->enum('semester', array('1', '0'))->default('1');
			$table->enum('status', array('A', 'N'))->default('N');
			$table->date('tanggal_mulai');
			$table->date('tanggal_berakhir');
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->timestamps();
			$table->softDeletes();
			$table->unique(array('tahun_akademik', 'semester'));
		});
	}

	public function down()
	{
		Schema::drop('jurusan_tahun_akademik');
	}
}