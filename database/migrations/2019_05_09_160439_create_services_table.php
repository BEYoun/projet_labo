<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnels', function (Blueprint $table) {
			$table->increments('id');
			$table->string('mail')->unique();
			$table->string('nom');
			$table->string('prenom');
			$table->integer('tel');
			$table->integer('fax');
			$table->integer('addresse');
			$table->string('type');
			$table->integer('status');
			$table->timestamps();
		});
		Schema::create('doctorants', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('personnel_id')->unsigned()->index();
			$table->timestamps();
		});
		Schema::create('stagiaires', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('personnel_id')->unsigned()->index();
			$table->timestamps();
		});
		Schema::create('permanents', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('permanent');
			$table->integer('personnel_id')->unsigned()->index();
			$table->timestamps();
		});
		Schema::create('departements', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('titre');
			$table->longText('description');
			$table->integer('personnel_id')->unsigned()->index();
			$table->timestamps();
		});
		Schema::create('equipes', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->longText('description');
			$table->integer('personnel_id')->unsigned()->index();
			$table->integer('departement_id')->unsigned()->index();
			$table->timestamps();
		});
		Schema::create('services', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
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
		Schema::drop('services');
		Schema::drop('departements');
		Schema::drop('personnels');
		Schema::drop('equipes');
		Schema::drop('permanent');
		Schema::drop('stagiaires');
		Schema::drop('doctorants');
	}

}
