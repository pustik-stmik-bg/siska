<?php

namespace Modules\Jurusan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jenjang extends Model {

	protected $table = 'jurusan_jenjang';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('kode_jenjang', 'nama_jenjang');

	public function nama_jurusan()
	{
		return $this->hasMany('Modules\Jurusan\Entities\NamaJurusan', 'kode_jenjang');
	}

}