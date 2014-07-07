<?php

class FakeOfficeSeeder extends BaseSeeder {

    public function run()
    {	
        DB::connection()->disableQueryLog();
        DB::table('offices')->delete();

    	$total = 100;

        for ($i = 1; $i < $total; $i++)
        {
            Office::create(array(
            	'id'=>$i,
            	'name'=>$this->faker->company,
            	'address'=>$this->faker->streetAddress,
            	'city'=>$this->faker->city,
            	'state'=>$this->faker->stateAbbr,
            	'zip'=>$this->faker->postcode
            ));

            //$this->command->info('Office ' . $i . ' of ' . $total . ' Created');
        }
    }

}