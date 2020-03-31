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
            'kruid2' => 'peper',
            'kruid3' => 'suiker',
            'hoeveelheid1' => 'theelepel',
            'hoeveelheid2' => 'theelepel',
            'hoeveelheid3' => '1/2 theelepel',
            'omschrijving' => null,
            'gebruikersnaam' => 'mauriccio'
        ]);
        DB::table('mix')->insert([
            'naam' => 'mixnaam2',
            'kruid1' => 'zout',
            'kruid2' => 'suiker',
            'kruid3' => 'suiker',
            'hoeveelheid1' => 'theelepel',
            'hoeveelheid2' => '1/2 theelepel',
            'hoeveelheid3' => '1/2 theelepel',
            'omschrijving' => null,
            'gebruikersnaam' => 'wessel'
        ]);
    }
}
