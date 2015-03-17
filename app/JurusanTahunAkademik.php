<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JurusanTahunAkademik extends Model {

	protected $table = 'jurusan_tahun_akademik';

	protected $fillable = ['nama_tahun_akademik', 'semester', 'status'];

}
