<?php

use Illuminate\Database\Seeder;

class MixTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mix')->insert([
            'naam' => 'mixnaam',
            'kruid1' => 'zout',
            'kruid2' => 'zout',
            'kruid3' => 'zout',
            'hoeveelheid1' => 10,
            'hoeveelheid2' => 10,
            'hoeveelheid3' => 10,
            'omschrijving' => null,
            'gebruikersnaam' => 'mauriccio'
        ]);
        DB::table('mix')->insert([
            'naam' => 'mixnaam2',
            'kruid1' => 'zout',
            'kruid2' => 'zout',
            'kruid3' => 'zout',
            'hoeveelheid1' => 5,
            'hoeveelheid2' => 15,
            'hoeveelheid3' => 10,
            'omschrijving' => null,
            'gebruikersnaam' => 'wessel'
        ]);
    }
}
