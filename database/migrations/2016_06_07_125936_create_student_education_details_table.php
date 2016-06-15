<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentEducationDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_education_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('secondary')->nullable();
			$table->string('secondary_grade')->nullable();
			$table->string('secondary_filename')->nullable();
			$table->string('original_filename')->nullable();
			$table->string('secondary_mime')->nullable();
			$table->string('post_secondary')->nullable();
			$table->string('post_grade')->nullable();
			$table->string('post_filename')->nullable();
			$table->string('post_originalname')->nullable();
			$table->string('post_mime')->nullable();
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
		Schema::drop('student_education_details');
	}

}
