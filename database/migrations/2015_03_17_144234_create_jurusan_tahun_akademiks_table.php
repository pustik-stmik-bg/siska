<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJurusanTahunAkademiksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jurusan_tahun_akademik', function(Blueprint $table)
		{
			$table->increments('kode_tahun_akademik');
			$table->string('nama_tahun_akademik', 9)->unique();
			$table->enum('semester', ['1', '0'])->default('1');
			$table->enum('status', ['A', 'N'])->default('N');
			$table->integer('created_by');
			$table->integer('updated_by');
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
		Schema::drop('jurusan_tahun_akademik');
	}

}
