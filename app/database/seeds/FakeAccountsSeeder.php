<?php

class FakeAccountsSeeder extends BaseSeeder {

    public function run()
    {
        DB::connection()->disableQueryLog();
        DB::table('accounts')->delete();

        $totalRecordsToCreate = 2000000;
        $chunkRecordCount = 500;

        for($a = 1; $a <= ($totalRecordsToCreate / $chunkRecordCount); $a++)
        {
            $array = array();

            for ($b = 1; $b <= $chunkRecordCount; $b++)
            {
                $array[] = array(
                        'office_id'=>$this->faker->numberBetween(1,100)
                );
            }

            $this->command->info('Batch #' . $a . ' of ' . ($totalRecordsToCreate / $chunkRecordCount) . ' Added');
            DB::table('accounts')->insert($array);
        }

    }

}