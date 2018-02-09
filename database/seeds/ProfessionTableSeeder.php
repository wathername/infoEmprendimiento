<?php

use Illuminate\Database\Seeder;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert($data = array(
            [
                'profession'=> 'Estudiante',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'profession'=> 'Profesor',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
