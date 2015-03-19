<?php

namespace Modules\Jurusan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NamaJurusan extends Model {

	protected $table = 'jurusan_nama_jurusan';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('kode_jenjang', 'kode_jurusan', 'nama_jurusan', 'singkatan_jurusan');

	public function jenjang()
	{
		return $this->belongsTo('Modules\Jurusan\Entities\Jenjang', 'kode_jenjang');
	}

	public function jurusan()
	{
		return $this->belongsTo('Modules\Jurusan\Entities\Jurusan', 'kode_jurusan');
	}

	public function kompetensi()
	{
		return $this->hasMany('Modules\Jurusan\Entities\Kompetensi', 'kode_nama_jurusan');
	}

}