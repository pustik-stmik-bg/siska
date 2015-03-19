<?php

namespace Modules\Jurusan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matakuliah extends Model {

	protected $table = 'jurusan_matakuliah';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('kode_matakuliah', 'nama_matakuliah', 'sks_teori', 'sks_praktek', 'sks_praktikum');

}