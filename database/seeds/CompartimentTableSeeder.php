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
          'comp_nummer' => 1,
          'comp_kruid' => 'zout'
        ]);

        DB::table('compartiment')->insert([
          'comp_nummer' => 2,
          'comp_kruid' => 'peper'
        ]);

        DB::table('compartiment')->insert([
          'comp_nummer' => 3,
          'comp_kruid' => 'suiker'
        ]);
    }
}
