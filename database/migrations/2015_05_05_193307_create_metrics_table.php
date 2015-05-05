<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetricsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('metrics', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category');
            $table->string('level');
            $table->string('value');
            $table->integer('repetitions');
            $table->integer('game_id');
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
		Schema::drop('metrics');
	}

}
