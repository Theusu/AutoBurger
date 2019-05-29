<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(breadsTableSeeder::class);
        $this->call(proteinTableSeeder::class);
        $this->call(saladTableSeeder::class);
        $this->call(comboTableSeeder::class);
        $this->call(orderTableSeeder::class);        
    }
}
