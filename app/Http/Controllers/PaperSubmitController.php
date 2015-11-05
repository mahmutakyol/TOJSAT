<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PaperSubmitRequest;
use App\Menu;
use App\Submission;
use App\User;
use Illuminate\Http\Request;
use Input;

class PaperSubmitController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::all();
		return view('pages.paperSubmit')->with([
            'user' => $users
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
	public function store(PaperSubmitRequest $request)
	{
        $file = Input::file('file');
        $filename = $file->getClientOriginalName();
        $submission = new Submission();
        $submission->paper_title = $request->get('title');
        $submission->paper_abstract = $request->get('abstract');
        $submission->paper_keywords = $request->get('keywords');
        $submission->name = $filename;
        $submission->save();

        Input::file('file')->move(
            base_path().'/public/submitPaper/waiting',$filename
        );
        $users = User::all();
        return view('pages.paperSubmit')->with([
            'users' => $users
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
