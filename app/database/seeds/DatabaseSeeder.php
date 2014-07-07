<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->command->info('Seeding Offices...');
		$this->call('FakeOfficeSeeder');
		$this->command->info('Offices Seeded!!!!');

		$this->command->info('Seeding Users...');
		$this->call('FakeUserSeeder');
		$this->command->info('Users Seeded!!!!');

		$this->command->info('Seeding Accounts...');
		$this->call('FakeAccountsSeeder');
		$this->command->info('Accounts Seeded!!!!');

		$this->command->info('Seeding Loans...');
		$this->call('FakeLoansSeeder');
		$this->command->info('Loans Seeded!!!!');
	}

}
