<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentdetails', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('regnumber');
			$table->string('campus');
			$table->string('faculty');
			$table->string('program');
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
		Schema::drop('studentdetails');
	}

}
