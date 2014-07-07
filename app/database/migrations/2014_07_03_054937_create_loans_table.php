<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('loans', function($table) {

			$table->increments('id');

			$table->integer('account_id');

			$table->integer('user_id');

			$table->string('first_name');

			$table->string('middle_name');

			$table->string('last_name');

			$table->string('suffix');

			$table->string('id_number');

			$table->string('id_state');

			$table->string('ssn');

			$table->string('hphone');

			$table->string('wphone');

			$table->decimal('payment_amt', 6, 2);

			$table->decimal('high_credit', 6, 2);
			$table->integer('high_terms');

			$table->decimal('current_credit', 6, 2);
			$table->integer('current_terms');

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
		//
		Schema::drop('loans');
	}

}
