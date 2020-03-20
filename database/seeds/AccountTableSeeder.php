<?php

use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
        'gebruikersnaam' => 'admin',
        'wachtwoord' => 'wessel8'
        ]);
    }
}
