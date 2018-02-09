<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert($data = array(
            [
                'role'=> 'Administrador',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'role'=> 'Supervisor',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'role'=> 'Usuario',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
