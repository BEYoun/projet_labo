<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantnonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('etudiants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom');
			$table->string('prenom');
			$table->timestamps();
		});
		Schema::create('encadrement_etudiant', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('etudiant_id')->unsigned()->index();
			$table->integer('encadrement_id')->unsigned()->index();
			$table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
			$table->foreign('encadrement_id')->references('id')->on('encadrements')->onDelete('cascade');
		});
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
		Schema::drop('encadrement_etudiant');
		Schema::drop('etudiants');
		// Schema::table('etudiants', function(Blueprint $table)
		// {
		// 	$table->string('nom');
		// 	$table->string('prenom');
		// 	$table->dropColumn('etudiant_id');
		// });
	}

}
