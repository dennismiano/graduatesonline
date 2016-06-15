<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAcademicDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_academic_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('university')->nullable();
			$table->string('department')->nullable();
			$table->string('program')->nullable();
			$table->string('study_mode')->nullable();
			$table->string('sponsor_name')->nullable();
			$table->string('sponsor_email')->nullable();
			$table->string('sponsor_telephone')->nullable();
			$table->string('sponsor_postal_address')->nullable();
			$table->string('sponsor_postal_town')->nullable();
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
		Schema::drop('student_academic_details');
	}

}
