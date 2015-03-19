<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('jurusan_kompetensi', function(Blueprint $table) {
			$table->foreign('kode_nama_jurusan')->references('kode_nama_jurusan')->on('jurusan_nama_jurusan')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
		Schema::table('jurusan_nama_jurusan', function(Blueprint $table) {
			$table->foreign('kode_jenjang')->references('kode_jenjang')->on('jurusan_jenjang')
						->onDelete('restrict')
						->onUpdate('cascade');
			$table->foreign('kode_jurusan')->references('kode_jurusan')->on('jurusan_jurusan')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
		Schema::table('jurusan_kurikulum_matakuliah', function(Blueprint $table) {
			$table->foreign('kode_kurikulum')->references('kode_kurikulum')->on('jurusan_kurikulum')
						->onDelete('restrict')
						->onUpdate('cascade');
			$table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('jurusan_matakuliah')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('jurusan_kompetensi', function(Blueprint $table) {
			$table->dropForeign('jurusan_kompetensi_kode_nama_jurusan_foreign');
		});
		Schema::table('jurusan_nama_jurusan', function(Blueprint $table) {
			$table->dropForeign('jurusan_nama_jurusan_kode_jenjang_foreign');
			$table->dropForeign('jurusan_nama_jurusan_kode_jurusan_foreign');
		});
		Schema::table('jurusan_kurikulum_matakuliah', function(Blueprint $table) {
			$table->dropForeign('jurusan_kurikulum_matakuliah_kode_kurikulum_foreign');
			$table->dropForeign('jurusan_kurikulum_matakuliah_kode_matakuliah_foreign');
		});
	}
}