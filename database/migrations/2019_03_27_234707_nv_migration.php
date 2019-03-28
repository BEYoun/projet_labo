<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NvMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Cvs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('photo');
			$table->longText('presentation');
			
			$table->timestamps();
		});
		Schema::create('educations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->longText('content');
			$table->integer('cv_id')->unsigned()->index();
			$table->timestamps();
		});
		Schema::create('experiences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('photo');
			$table->longText('presentation');
			$table->integer('cv_id')->unsigned()->index();
			$table->timestamps();
		});
		Schema::create('competences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('photo');
			$table->longText('presentation');
			$table->integer('cv_id')->unsigned()->index();
			$table->timestamps();
		});
		Schema::create('users', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name');
			$table->string('firstName');
			$table->integer('tel');
			$table->string('role');
			$table->string('profession');
			$table->string('email')->unique();
			$table->integer('cv_id')->unsigned()->index();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cvs');
		Schema::drop('competences');
		Schema::drop('experiences');
		Schema::drop('educations');
		Schema::drop('users');
		//
	}

}
