<?php

class FakeAccountsSeeder extends BaseSeeder {

    public function run()
    {
        DB::connection()->disableQueryLog();
        //DB::table('accounts')->delete();

        $total = 20000;

        for ($i = 1; $i < $total; $i++)
        {
            $db = DB::insert('insert into accounts (office_id) values (?)', array($this->faker->numberBetween(1,100)));
            
            //$this->command->info('Account: ' . $i . ' Memory: ' . memory_get_usage());
            //$this->command->info('Account ' . $i . ' of ' . $total . ' Created');

            $db = null;
        }

    }

}