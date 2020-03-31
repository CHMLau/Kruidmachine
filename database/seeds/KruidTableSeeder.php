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

        DB::table('kruid')->insert([
            'kruid' => 'peper',
            'comp_nummer' => null
        ]);

        DB::table('kruid')->insert([
            'kruid' => 'suiker',
            'comp_nummer' => null
        ]);
    }
}
