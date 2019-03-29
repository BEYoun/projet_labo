<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncadrementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encadrements', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('categorie');
			$table->string('sujet');
			$table->integer('user_id')->unsigned()->index();
			
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
		Schema::drop('encadrements');
		Schema::drop('etudiants');
	}

}
