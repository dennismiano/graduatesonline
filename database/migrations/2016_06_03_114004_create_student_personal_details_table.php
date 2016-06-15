<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPersonalDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_personal_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('phone_number')->nullable();
			$table->string('identity_number')->nullable();
			$table->string('gender')->nullable();
			$table->string('date_of_birth')->nullable();
			$table->string('place_of_birth')->nullable();
			$table->string('current_residence')->nullable();
			$table->string('postal_address')->nullable();
			$table->string('postal_town')->nullable();
			$table->string('religion')->nullable();
			$table->string('kin_name')->nullable();
			$table->string('kin_number')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_personal_details');
	}

}
