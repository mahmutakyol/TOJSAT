<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\DashboardEthicRequest;
use App\Menu;
use DB;
use Illuminate\Http\Request;

class DashboardEthicController extends AdminController {

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
        $content = DB::table('contents')->where('menu_id', '=', 5)->pluck('content');
        $info = Menu::find(5);


        return view('dashboard.dashboard-pages.ethics')->with([
            'content' => $content,
            'name' => $info->name
        ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DashboardEthicRequest $request)
	{
        DB::table('contents')->where('menu_id', 5)->update(['content' => $request->get('content')]);
        $content = DB::table('contents')->where('menu_id', '=', 5)->pluck('content');
        $info = Menu::find(5);

        return view('dashboard.dashboard-pages.ethics')->with([
            'content' => $content,
            'name' => $info->name
        ]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
