<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Studentdetails;
use App\Usergroup as Usergroup;
use App\User;
use Illuminate\Http\Request;
use Auth;

class VerifyRegistration extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */	
	public function verify()
	{	$column = 'user_id';
		$user_id = Auth::user()->id;
		$groups = Usergroup::where(array($column => $user_id))->count();
		$studentdetails = Studentdetails::where(array($column => $user_id))->count();
		if($groups === 0){
		return view('profile');
		}
		else 
			if ($studentdetails === 0)
				{
				return view('moredetails');
				}
		else
		{
		return view('studenthome');
		}
	}
}
