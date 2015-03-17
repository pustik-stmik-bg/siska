<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class JurusanTahunAkademik extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = JurusanTahunAkademik::all();

		return view('jurusan.tahun_akademik.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('jurusan.tahun_akademik.input');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		JurusanTahunAkademik::create($request->all());

		redirect(url('/jurusan/tahun_akademik/create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = JurusanTahunAkademik::find($id);

		return view('jurusan.tahun_akademik.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = JurusanTahunAkademik::find($id);

		return view('jurusan.tahun_akademik.input', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$data = JurusanTahunAkademik::find($id);
		$data->nama_tahun_akademik = $request->nama_tahun_akademik;
		$data->semester = $request->semester;
		$data->status = $request->status;
		$data->created_by = 1;
		$data->updated_by = 1;
		$data->save();

		redirect(url('/jurusan/tahun_akademik/edit'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = JurusanTahunAkademik::find($id);
		$data->delete();

		redirect(url('/jurusan/tahun_akademik'));
	}

}
