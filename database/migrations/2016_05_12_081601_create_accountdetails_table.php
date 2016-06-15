<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accountdetails', function(Blueprint $table)
		{
			$notdone = 0;
			$done = 1;
			$table->increments('id', false)->index();
			$table->integer('user_id', false)->index();
			$table->boolean('complete')->default($notdone);
			$table->boolean('confirmed')->default($notdone);
			$table->boolean('active')->default($done);
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
		Schema::drop('accountdetails');
	}

}
