<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert($data = array(
            [
                'type'=> 'V-',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'type'=> 'E-',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'type'=> 'J-',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'type'=> 'G-',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
