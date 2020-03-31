<?php

use Illuminate\Database\Seeder;

class CompartimentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compartiment')->insert([
            'comp1_volheid' => 0,
            'comp2_volheid' => 0,
            'comp3_volheid' => 0
        ]);
    }
}
