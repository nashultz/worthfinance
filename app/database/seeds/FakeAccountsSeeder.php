<?php

class FakeAccountsSeeder extends BaseSeeder {

    public function run()
    {
        DB::connection()->disableQueryLog();
        //DB::table('accounts')->delete();

        $totalRecordsToCreate = 1000000;
        $chunkRecordCount = 500;

        for($a = 1; $a <= ($totalRecordsToCreate / $chunkRecordCount); $a++)
        {
            $array = array();

            for ($b = 1; $b <= $chunkRecordCount; $b++)
            {
                $array[] = $this->faker->numberBetween(1,100);
            }

            $this->command->info('Batch #' . $a . ' of ' . ($totalRecordsToCreate / $chunkRecordCount) . ' Added');
            DB::insert('insert into accounts (office_id) values (?)', $array);
        }

    }

}