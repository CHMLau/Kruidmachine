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
          'comp_nummer' => 1
        ]);

        DB::table('compartiment')->insert([
          'comp_nummer' => 2
        ]);

        DB::table('compartiment')->insert([
          'comp_nummer' => 3        
        ]);
    }
}
