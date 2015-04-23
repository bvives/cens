<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoblacionsAndVotantsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poblacions', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('name')->default('');
			$table->string('slug')->default('');
                        $table->integer('habitants')->default(0);
			$table->timestamps();
		});
                
                Schema::create('votants', function(Blueprint $table) {
			$table->increments('id');
                        $table->string('name')->default('');
			$table->string('slug')->default('');
			$table->integer('poblacion_id')->unsigned()->default(0);
			$table->foreign('poblacion_id')->references('id')->on('poblacions')->onDelete('cascade');
                        $table->string('dni', 9)->default('');			
                        $table->date('dataNaixement');
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
		Schema::drop('votants');
                Schema::drop('poblacions');
	}

}
