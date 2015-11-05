<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\DashboardIssueRequest;
use App\Site;
use App\Statu;
use App\Submission;
use App\Issue;
use Route;
use Session;
use Illuminate\Http\Request;
use Input;

class DashboardIssueController extends AdminController {

    public function __construct()
    {
        parent::__construct();
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($site_id)
	{
        $submission = Submission::where('site_id', $site_id)->get();

        return view('dashboard.dashboard-journals.issueList')->with([
            'submissions' => $submission
        ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $status = Statu::all();
		return view('dashboard.dashboard-journals.createIssue')->with([
            'status' => $status
        ]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DashboardIssueRequest $request)
	{
        $cover_image = Input::file('cover_image');
        $cover_image_name = $cover_image->getClientOriginalName();

        $full_pdf = Input::file('full_pdf');
        $full_pdf_name = $full_pdf->getClientOriginalName();

        $issue = new Issue();
        $issue->volume = $request->get('volume');
        $issue->issue = $request->get('issue');
        $issue->year = $request->get('year');
        $issue->message_e_c = $request->get('message_e_c');
        $issue->message_e = $request->get('message_e');
        $issue->status_id = $request->get('status');
        $issue->cover_image = base_path().'/public/source/images/'.$cover_image_name;
        $issue->full_pdf = base_path().'/public/source/pdf/'.$full_pdf_name;
        $issue->save();

        $full_pdf->move(
            base_path().'/public/source/pdf', $full_pdf_name
        );

        $cover_image->move(
            base_path().'/public/source/images', $cover_image_name
        );

        $status = Statu::all();

        return view('dashboard.dashboard-journals.createIssue')->with([
            'status' => $status
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
