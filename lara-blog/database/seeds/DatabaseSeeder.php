<?php

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();
        $this->call(AutoSeeder::class);
        Model::reguard();
    }
    //teraz spustíme príkaz na importovanie údajov do databázy: php artisan db:seed
}
