<?php

use Illuminate\Database\Seeder;

class PeriodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->insert($data = array(
            [
                'period'=> '2017-II',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
