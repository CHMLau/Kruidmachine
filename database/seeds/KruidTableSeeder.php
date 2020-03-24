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
            'comp_nummer' => null  
        ]);
    }
}
