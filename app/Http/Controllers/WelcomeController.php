<?php namespace App\Http\Controllers;

use App\kue;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->m`iddleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$kue = Kue::orderBy('id','desc')->paginate(6);
		return view('welcome',['kue'=>$kue]);
	}

	public function detailkue($id)
	{
		$kue = Kue::find($id);
		return view('userkue',['kue'=>$kue]);
	}

}
