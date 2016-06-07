<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRsvpTable extends Migration {

	public function up()
	{
		Schema::create('rsvp', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email')->nullable();
			$table->tinyInteger('food_allergy')->nullable()->default('0');
			$table->text('food_allergy_spec')->nullable();
			$table->tinyInteger('vegetarian')->nullable()->default('0');
			$table->text('dance_request')->nullable();
			$table->tinyInteger('plus_one')->nullable()->default('0');
			$table->tinyInteger('confirmation')->nullable()->default('0');
			$table->string('code')->nullable()->index();
			$table->bigInteger('user_id')->nullable()->unsigned()->nullable();
			$table->bigInteger('rsvp_id')->nullable()->default('0');
		});
	}

	public function down()
	{
		Schema::drop('rsvp');
	}
}
