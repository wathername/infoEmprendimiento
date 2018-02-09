<?php

use Illuminate\Database\Seeder;

class PersonalInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_informations')->insert($data = array(
            [
                'type_id'=> '1',
                'identification' => '18560314',
                'name' => 'HECTOR ELIAS',
                'last_name' => 'GALINDEZ MERCEDEZ',
                'phone' => '+58-414-456-4432',
                'origin_city_id' => '149',
                'recidency_city_id' => '204',
                'address' => 'CALLE SANTA EDUVIGES #40, LOS LAURELES',
                'user_id' => '1',
                'statu_id' => '4',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
