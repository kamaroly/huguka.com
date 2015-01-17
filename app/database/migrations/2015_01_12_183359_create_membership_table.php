<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_membership', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('user_id');
			$table->integer('membership_type');
			$table->decimal('payment_amount',2);
			$table->timestamp('last_payment_date');
			$table->timestamp('active_till');
			$table->string('transaction_id');

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
		Schema::drop('user_membership');
	}

}
