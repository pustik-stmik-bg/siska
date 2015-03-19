<?php namespace Modules\Acl\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class AclController extends Controller {

	public function index()
	{
		return View::make('acl::index');
	}
	
}