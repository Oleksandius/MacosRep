<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmgTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productes', function(Blueprint $table)
		{
		    $table->increments('id');
			$table->string('titol');
			$table->string('marca');
			$table->string('model');
			$table->double('preu');
			$table->integer('any');
			$table->double('pes_aprox');
			$table->string('material');
			$table->string('color');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('estat');
			$table->string('comentari');
			$table->binary('foto');
			$table->timestamps();
		});

		Schema::create('comentaris', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('producte_id')->unsigned()->default(0);
			$table->foreign('producte_id')->references('id')->on('productes')->onDelete('cascade');
			$table->string('comentari');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->timestamps();
		});
			Schema::create('preferits', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('producte_id')->unsigned()->default(0);
			$table->foreign('producte_id')->references('id')->on('productes')->onDelete('cascade');
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
		Schema::drop('productes');
		Schema::drop('comentaris');
		Schema::drop('preferits');
	}

}
