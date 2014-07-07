<?php

class FakeLoansSeeder extends BaseSeeder {

    public function run()
    {
        DB::connection()->disableQueryLog();
        DB::table('loans')->delete();

        $total = 2000000;

        for ($i = 1; $i < $total; $i++)
        {   
            Loan::create(array(
            	'account_id'=>$this->faker->numberBetween(1,800000),
                'user_id'=>$this->faker->numberBetween(1,100),
                'first_name'=>$this->faker->firstName,
                'middle_name'=>$this->faker->firstName,
                'last_name'=>$this->faker->lastName,
                'suffix'=>'',
                'id_number'=>$this->faker->numerify('########'),
                'id_state'=>$this->faker->stateAbbr,
                'ssn'=>$this->faker->bothify('###-##-####'),
                'hphone'=>$this->faker->bothify('###-###-####'),
                'wphone'=>$this->faker->bothify('###-###-####'),
                'payment_amt'=>$this->faker->randomFloat(2, 50, 150),
                'high_credit'=>($this->faker->numberBetween(2, 13) * 100),
                'high_terms'=>12,
                'current_credit'=>($this->faker->numberBetween(2, 13) * 100),
                'current_terms'=>12
            ));

            //$this->command->info('Loan ' . $i . ' of ' . $total . ' Created');
        }
    }

}