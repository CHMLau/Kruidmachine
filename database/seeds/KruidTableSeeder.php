<?php

use Illuminate\Database\Seeder;

class KruidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kruid')->insert([
            'kruid' => 'zout',
            'img_path' => 'zout.png',
            'comp_nummer' => 1  
        ]);

        DB::table('kruid')->insert([
            'kruid' => 'peper',
            'img_path' => 'peper.png',
            'comp_nummer' => 2  
        ]);

        DB::table('kruid')->insert([
            'kruid' => 'suiker',
            'img_path' => 'suiker.png',
            'comp_nummer' => 3  
        ]);
    }
}
