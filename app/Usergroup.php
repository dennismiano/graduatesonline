<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usergroup extends Model {

protected $fillable = ['user_id', 'group_id'];

public function user(){
   return $this->belongsToMany('App\User');
}
}
