<?php namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Response;
use App\Student_personal_details;
use App\Student_academic_details;
use App\Student_education_details;
use App\Accountdetail;
use Auth;
use Input;
use Storage;
use File;


class StudentPDetailsController extends Controller {

	public function store()
	{	
		$column = 'user_id';
		$user_id = Auth::user()->id;
		$details = Accountdetail::firstOrCreate([$column => $user_id]);
		
		if(Request::ajax()){

		$studentpdetails  = new Student_personal_details;
		$studentpdetails->user_id = Auth::user()->id;
		$studentpdetails->phone_number = Input::get('studentphonenumber');
		$studentpdetails->identity_number = Input::get('studentidnumber');
		$studentpdetails->gender = Input::get('studentgender');
		$studentpdetails->date_of_birth = Input::get('studentbirthdate');
		$studentpdetails->place_of_birth = Input::get('studentnationality');
		$studentpdetails->current_residence = Input::get('studentresidence');
		$studentpdetails->postal_address = Input::get('studentpostalcode');
		$studentpdetails->postal_town = Input::get('studentpostaltown');
		$studentpdetails->religion = Input::get('studentreligion');
		$studentpdetails->kin_name = Input::get('studentnextkin');
		$studentpdetails->kin_number = Input::get('studentnextkinnumber');
		
		$studentpdetails->save();
		return Response::json(Request::all());

		}

	}
	
	public function storeacademic(){
	
		$column = 'user_id';
		$user_id = Auth::user()->id;
		$details = Accountdetail::firstOrCreate([$column => $user_id]);
	
	if(Request::ajax()){
	$studentadetails = new Student_academic_details;
	$studentadetails->user_id = Auth::user()->id;
	$studentadetails->university = Input::get('studentcampus');
	$studentadetails->department = Input::get('campusdepartment');
	$studentadetails->program = Input::get('deptprogram');
	$studentadetails->study_mode = Input::get('studymode');
	$studentadetails->sponsor_name = Input::get('sponsor');
	$studentadetails->sponsor_email = Input::get('emailsponsor');
	$studentadetails->sponsor_telephone = Input::get('sponsortel');
	$studentadetails->sponsor_postal_address = Input::get('sponsorcode');
	$studentadetails->sponsor_postal_town = Input::get('sponsortown');
	
	$studentadetails->save();
	return Response::json(Request::all());
	}
	
	}
	
	public function storeeducation(){
	
		$column = 'user_id';
		$user_id = Auth::user()->id;
		$details = Accountdetail::firstOrCreate([$column => $user_id]);
		
	if(Request::ajax()){
	$secondarycert = Request::file('secondarycert');
	$extension = $secondarycert->getClientOriginalExtension();
	Storage::disk('local')->put($secondarycert->getFilename().'.'.$extension, File::get($secondarycert));
	
	$postsec_cert = Request::file('pschoolcert');
	$ext = $postsec_cert->getClientOriginalExtension();
	Storage::disk('local')->put($postsec_cert->getFilename().'.'.$ext, File::get($postsec_cert));
	
	$sCertEntry = new Student_education_details;
	
	$sCertEntry->user_id = Auth::user()->id;
	$sCertEntry->secondary = Input::get('sschool');
	$sCertEntry->secondary_grade = Input::get('secondarygrade');
	
	$sCertEntry->secondary_filename = $secondarycert->getFilename().'.'.$extension;
	$sCertEntry->original_filename = $secondarycert->getClientOriginalName();
	$sCertEntry->secondary_mime = $secondarycert->getClientMimeType();
	
	$sCertEntry->post_secondary = Input::get('pschool');
	$sCertEntry->post_grade = Input::get('pschoolgrade');
	
	$sCertEntry->post_filename = $postsec_cert->getFilename().'.'.$ext;
	$sCertEntry->post_originalname = $postsec_cert->getClientOriginalName();
	$sCertEntry->post_mime = $postsec_cert->getClientMimeType();
	
	$sCertEntry->save();
	
	
	//return $secondarycert->getFilename();
	return Response::json(Request::all());
	}
	}



}
