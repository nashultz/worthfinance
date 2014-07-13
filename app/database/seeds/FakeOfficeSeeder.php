<?php

class FakeOfficeSeeder extends BaseSeeder {

    public function run()
    {	
        DB::connection()->disableQueryLog();
        DB::table('offices')->delete();

        $totalRecordsToCreate = 2000000;
        $chunkRecordCount = 500;
        $record = 1;

        for($a = 1; $a <= ($totalRecordsToCreate / $chunkRecordCount); $a++)
        {
            $array = array();

            for ($b = 1; $b <= $chunkRecordCount; $b++)
            {
                $array[] = array(
                	'id'=>$record,
                	'name'=> 'Company #' . $record,
                	'address'=>'123 IDC Blvd',
                	'city'=>'Somewhere',
                	'state'=>'TX',
                	'zip'=>'90210'
                );

                $record++;

            }

            $this->command->info('Batch #' . $a . ' of ' . ($totalRecordsToCreate / $chunkRecordCount) . ' Added');
            DB::table('offices')->insert($array);
        }

    }

}