<?php

namespace Modules\Jurusan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KurikulumMatakuliah extends Model {

	protected $table = 'jurusan_kurikulum_matakuliah';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('kode_kurikulum', 'kode_matakuliah');

}