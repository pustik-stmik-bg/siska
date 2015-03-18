<?php namespace Modules\Jurusan\Entities;
   
use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model {

	/**
	* Definisikan table yang akan digunakan.
	*
	* @var string
	*/
	protected $table = 'jurusan_tahun_akademik';

	/**
	 * Atribut-atribut yang boleh di-assign secara massal.
	 *
	 * @var array
	 */
    protected $fillable = ['kode_tahun_akademik', 'nama_tahun_akademik', 'semester', 'status'];

}