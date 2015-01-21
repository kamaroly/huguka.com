<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLessonSerieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lesson_serie', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('lesson_id')->unsigned()->index();
			$table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
			$table->integer('serie_id')->unsigned()->index();
			$table->foreign('serie_id')->references('id')->on('series')->onDelete('cascade');
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
		Schema::drop('lesson_serie');
	}

}
