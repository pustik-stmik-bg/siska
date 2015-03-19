<?php

namespace Modules\Jurusan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kompetensi extends Model {

	protected $table = 'jurusan_kompetensi';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('kode_nama_jurusan', 'kode_kompetensi', 'nama_kompetensi');

	public function nama_jurusan()
	{
		return $this->belongsTo('Modules\Jurusan\Entities\NamaJurusan', 'kode_nama_jurusan');
	}

}