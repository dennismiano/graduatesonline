<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountdetail extends Model {
	protected $fillable = ['user_id'];
	public function useraccount(){
	$this->belongsTo('App\User');
	}

}
