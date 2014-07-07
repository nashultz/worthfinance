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

		// Test
		$this->command->info('Memory: ' . memory_get_usage());
		$test = new FakeAccountsSeeder();
		$test->run();
		$this->command->info('Memory: ' . memory_get_usage());

		unset($test);

		$this->command->info('Memory: ' . memory_get_usage());
		$test = new FakeAccountsSeeder();
		$test->run();
		$this->command->info('Memory: ' . memory_get_usage());
		
		unset($test);
		$this->command->info('Memory: ' . memory_get_usage());

		$this->command->info('Seeding Offices...');
		//$this->call('FakeOfficeSeeder');
		$this->command->info('Offices Seeded!!!!');

		$this->command->info('Seeding Users...');
		//$this->call('FakeUserSeeder');
		$this->command->info('Users Seeded!!!!');

		$this->command->info('Seeding Accounts...');
		//$this->call('FakeAccountsSeeder');
		$this->command->info('Accounts Seeded!!!!');

		$this->command->info('Seeding Loans...');
		//$this->call('FakeLoansSeeder');
		$this->command->info('Loans Seeded!!!!');

		// $this->call('UserTableSeeder');
	}

}
