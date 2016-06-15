<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Usergroup;
use App\Accountdetail;
use Illuminate\Http\Request;
use App\Student_personal_details;
use App\Student_academic_details;
use App\Student_education_details;
use Session;

class RegistrationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function checkstatus(){
		$column = 'user_id';
		$user_id = Auth::user()->id;
		$details = Accountdetail::where(array($column => $user_id))->count();
			
		if($details === 0){
		
				$new_user = new Accountdetail;
				$new_user->user_id = $user_id;
				$new_user->save();
				
				$column = 'user_id';
				$user_id = Auth::user()->id;
				$user = Usergroup::where(array($column => $user_id))->first(); 
				
					if($user->group_id === 1){
					Session::flash('personal', '');
					Session::flash('academic', '');
					Session::flash('education', '');
					return view('student');
							}
					else if($user->group_id === 2){
							return view('supervisor');
							}
					else if($user->group_id === 3){
							return view('mentor');
							}
				
				}
			else{
				$column = 'user_id';
				$check = Accountdetail::where(array($column => $user_id))->first();
			if($check->complete === 0){
					
				$column = 'user_id';
				$user_id = Auth::user()->id;
				$user = Usergroup::where(array($column => $user_id))->first();
					
					if($user->group_id === 1){
							$column = 'user_id';
							$user_id = Auth::user()->id;
							$personaldetails = Student_personal_details::where(array($column => $user_id))->count();
							$academicdetails = Student_academic_details::where(array($column => $user_id))->count();
							$educationdetails = Student_education_details::where(array($column => $user_id))->count();
							if(($personaldetails === 1)&&($academicdetails === 1)&&($educationdetails === 1))
								{
								$complete = Accountdetail::find(array($column => $user_id))->first();
								$complete->complete = 1;
								$complete->save();
								return view('registrationcomplete');
								}
							else{
									if($personaldetails === 0)
										{Session::flash('personal', 'Please fill your personal details form before proceeding ');};
									if($academicdetails === 0)
										{Session::flash('academic', 'Please fill your academic details form before proceeding ');};
									if($educationdetails === 0)
										{Session::flash('education', 'Please fill your academic details form before proceeding ');};
									
									return view('student');
							}
							}
					else if($user->group_id === 2){
							return view('supervisor');
							}
					else if($user->group_id === 3){
							return view('mentor');
							}
						}
					else{
						
						if($check->confirmed === 0){
									return view('registrationcomplete');}
						else{
							if($check->active === 0){
							echo 'Sorry your account has been deactivated';
							}
							else{echo 'Welcome '.Auth::user()->first_name;}
							}
						}
					
		
	}

}
}