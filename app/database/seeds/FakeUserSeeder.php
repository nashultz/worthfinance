<?php

class FakeUserSeeder extends BaseSeeder {

    public function run()
    {	
        DB::connection()->disableQueryLog();
        DB::table('users')->delete();

    	$total = 100;

        for ($i = 1; $i < $total; $i++)
        {
            User::create(array(
            	'office_id'=>$this->faker->numberBetween(1,100),
            	'username'=>'user_'.$i,
            	'password'=>'money',
            	'confirmation_code'=>$this->faker->stateAbbr,
            	'confirmed'=>true
            ));

            //$this->command->info('User ' . $i . ' of ' . $total . ' Created');
        }
    }

}