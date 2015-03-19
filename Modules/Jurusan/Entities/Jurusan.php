<?php

namespace Modules\Jurusan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model {

	protected $table = 'jurusan_jurusan';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('kode_jurusan', 'nama_jurusan');

	public function nama_jurusan()
	{
		return $this->hasMany('Modules\Jurusan\Entities\NamaJurusan', 'kode_jurusan');
	}

}