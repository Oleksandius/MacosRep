<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTiendaTablas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuaris', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom');
			$table->string('cognom');
			$table->string('mail');
			$table->string('telefon');
			$table->string('direccio');
			$table->string('provincia');
			$table->string('ciutat');
			$table->double('puntuacio');
			$table->binary('foto');
			$table->string('contrasenya');
			$table->unique('mail');
			$table->timestamps();

		});
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
			$table->integer('usuari_id')->unsigned()->default(0);
			$table->foreign('usuari_id')->references('id')->on('usuaris')->onDelete('cascade');
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
			$table->integer('usuari_id')->unsigned()->default(0);
			$table->foreign('usuari_id')->references('id')->on('usuaris')->onDelete('cascade');
			$table->timestamps();
		});

		Schema::create('preferits', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('usuari_id')->unsigned()->default(0);
			$table->foreign('usuari_id')->references('id')->on('usuaris')->onDelete('cascade');
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
		Schema::drop('usuaris');
		Schema::drop('productes');
		Schema::drop('comentaris');
		Schema::drop('preferits');
	}

}
