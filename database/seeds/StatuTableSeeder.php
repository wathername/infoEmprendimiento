<?php

use Illuminate\Database\Seeder;

class StatuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert($data = array(
            [
                'statu'=> 'Activo',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'statu'=> 'Inactivo',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'statu'=> 'Incompleto',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'statu'=> 'Completo',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
