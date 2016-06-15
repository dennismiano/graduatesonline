<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_personal_details extends Model {

	protected $table = 'student_personal_details';
	
	public function user(){
		return $this->belongsTo('App\User');
	}
}
