<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(AccountTableSeeder::class);
        $this->call(CompartimentTableSeeder::class);
        $this->call(KruidTableSeeder::class);
        $this->call(MixTableSeeder::class);
    }
}
