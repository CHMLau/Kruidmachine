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
            'comp_nummer' => null  
        ]);
    }
}
