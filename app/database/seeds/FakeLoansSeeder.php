<?php

class FakeLoansSeeder extends BaseSeeder {

    public function run()
    {
        DB::connection()->disableQueryLog();
        DB::table('loans')->delete();

        $totalRecordsToCreate = 5000000;
        $chunkRecordCount = 500;

        for($a = 1; $a <= ($totalRecordsToCreate / $chunkRecordCount); $a++)
        {
            $array = array();

            for ($b = 1; $b <= $chunkRecordCount; $b++)
            {
                $array[] = array(
                    'account_id'=>$this->faker->numberBetween(1,800000),
                    'user_id'=>$this->faker->numberBetween(1,100),
                    'first_name'=>'Test_User_' . $a . '_' . $b,    
                    'middle_name'=>'',
                    'last_name'=>'Test_User_' . $a . '_' . $b,
                    'suffix'=>'',
                    'id_number'=>'00000000',
                    'id_state'=>'TX',
                    'ssn'=>'000-00-0000',
                    'hphone'=>'000-000-0000',
                    'wphone'=>'000-000-0000',
                    'payment_amt'=>57.00,
                    'high_credit'=>1300,
                    'high_terms'=>12,
                    'current_credit'=>1000,
                    'current_terms'=>12
                );

            }

            $this->command->info('Batch #' . $a . ' of ' . ($totalRecordsToCreate / $chunkRecordCount) . ' Added');

            DB::table('loans')->insert($array);
        }

    }

}

                