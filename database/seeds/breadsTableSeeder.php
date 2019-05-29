<?php

use Illuminate\Database\Seeder;

class breadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<=15;$i++){
            DB::table('breads')->insert( [

                'nome' => $faker->text(15),
                'preco' => $faker->randomFloat(2,100,200),
                            
            ] ); 
        }
    }
}
