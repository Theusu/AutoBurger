<?php

use Illuminate\Database\Seeder;

class orderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $comboIDs = DB::table('combo')->select('id')->get();
        $faker = Faker\Factory::create();
        //
        for($i=0; $i<=5;$i++){
            DB::table('combo')->insert( [
                'id_combo' => $faker->faker->randomElement($comboIDs),
            ] ); 
        }
    }
}
