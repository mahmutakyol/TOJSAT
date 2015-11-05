<?php namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\AdminController;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use DB;
use Illuminate\Http\Request;

class DashboardController extends AdminController {


    public function __construct()
    {
        parent::__construct();
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('dashboard.dashboard-pages.dashboard');
	}
}
