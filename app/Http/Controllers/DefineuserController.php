<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usergroup;
use App\Studentdetails;
use Input;
use Auth;
use View;
use Session;

use Illuminate\Http\Request;

class DefineuserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function store()
	{	
		$user_group = new Usergroup;
		$user_group->group_id = Input::get('user_group');
		$user_group->user_id = Auth::user()->id;
		if(($user_group->group_id > 3) || ($user_group->group_id < 1)){
		echo 'invalid request';
		}
		else{
		$column = 'user_id';
		$check = Usergroup::where(array($column => $user_group->user_id))->count();
		if ($check === 0){
								$user_group->save();
								
								$column = 'user_id';
								$user_group = Usergroup::where(array($column => $user_group->user_id))->first();
								if($user_group->group_id === 1){
								return view('moredetails');
									//return view('student');
									}
								else if($user_group->group_id === 2){
										//return view('supervisor');
										}
								else if($user_group->group_id === 3){
										//return view('mentor');
										}
						
						}
						else{ echo 'You have already set up the user type'; }
		}

	}
	
	public function moredetails(){
	
	$studentdetails = new Studentdetails;
	$studentdetails->user_id = Auth::user()->id;
	$studentdetails->regnumber = Input::get('regnumber');
	$studentdetails->campus = Input::get('campus');
	$studentdetails->faculty = Input::get('faculty');
	$studentdetails->program = Input::get('program');
	$studentdetails->save();
	
	return view('studenthome');
	
	}
}
