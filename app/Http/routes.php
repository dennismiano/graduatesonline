 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' =>'auth'], function(){
	
	Route::get('verify', 'VerifyRegistration@verify');
	Route::post('registration', 'DefineuserController@store');
	Route::get('reg_cont', 'RegistrationController@checkstatus');
	Route::post('studentpersonaldetails', 'StudentPDetailsController@store');
	Route::post('studentacademicdetails', 'StudentPDetailsController@storeacademic');
	Route::post('studenteducationddetails', 'StudentPDetailsController@storeeducation');
});
