<?php

use Illuminate\Database\Seeder;

class AutoSeeder extends Seeder
//prikaz na vytvornie seedera php artisan make:seeder AutoSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //triedu, ktorej je potrebné zadefinovať, aké údaje a kde má vložiť.
    public function run()
    {
        DB::table('auto')->insert([
            'znacka' => "Fiat",
            'model' => "Punto",
            'farba' => "Biela"
        ]);
        //uzivanim metod aplikacia nie je závislá od databázovej platformy
    }
    //posledným krokom pred spustením príkazu na import je registrácia UserSeeder do DatabaseSeeder
}
