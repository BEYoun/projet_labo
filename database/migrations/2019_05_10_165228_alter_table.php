<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('departements', function(Blueprint $table)
		{
			//
			$table->dropColumn('personnel_id');
			$table->integer('personnel_responsable_id')->unsigned()->index();
		});
		Schema::table('personnels', function(Blueprint $table)
		{
			//
			$table->integer('departement_id')->unsigned()->index();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('departements', function(Blueprint $table)
		{
			$table->dropColumn('personnel_responsable_id');
			$table->integer('personnel_id')->unsigned()->index();
		});
		Schema::table('personnels', function(Blueprint $table)
		{
			//
			$table->dropColumn('departement_id');
		});
	}

}
