<?php

use Illuminate\Database\Seeder;

class MatterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matters')->insert($data = array(
            [
                'matter'=> 'Pasantia',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'matter'=> 'Servicio Comunitario',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'matter'=> 'Proyecto de Grado I',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'matter'=> 'Proyecto de Grado II',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
