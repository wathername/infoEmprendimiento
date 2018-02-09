<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($data = array(
            [
                'email'=> 'hector@galindeztravel.com.ve',
                'user'=> 'Donelias02',
                'password'=> bcrypt('galindeztravel2017'),
                'remember_token' => str_random(10),
                'role_id' => '1',
                'statu_id' => '1',
                'profession_id' => '1',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
