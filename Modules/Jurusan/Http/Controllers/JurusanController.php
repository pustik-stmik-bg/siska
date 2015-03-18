<?php namespace Modules\Jurusan\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class JurusanController extends Controller {

	public function index()
	{
		return View::make('jurusan::index');
	}
	
}