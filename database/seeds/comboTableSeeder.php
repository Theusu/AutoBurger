<?php

use Illuminate\Database\Seeder;

class comboTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $breadIDs = DB::table('breads')->select('id')->get();
    $proteinIDs = DB::table('protein')->select('id')->get();
    $saladIDs = DB::table('salad')->select('id')->get();
    $faker = Faker/Factory::create();

        for($i=0; $i<=5;$i++){
            DB::table('combo')->insert( [

                'id_bread' => $faker->faker->randomElement($breadIDs),
                'id_protein' => $faker->faker->randomElement($proteinIDs),
                'id_salad' => $faker->faker->randomElement($saladIDs),
                'promo' => $faker->randomFloat(2,100,200),
                            
            ] ); 
        }
    }
}
