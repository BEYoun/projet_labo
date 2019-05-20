<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('distinctions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('titre');
			$table->text('descriptif');
			$table->enum('type', ['these', 'scientifique','honorifique','nomination']);
			$table->integer('personnel_id')->unsigned()->index();
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
		Schema::drop('distinctions');
	}

}
