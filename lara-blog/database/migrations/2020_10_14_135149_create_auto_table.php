<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoTable extends Migration
{
    //vytvorenie migracie databazy php artisan make:migration create_users_table
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Metóda up() sa volá pri zavolaní príkazu na prenesenie migrácii do databázy.
    public function up()
    {
        Schema::create('auto', function (Blueprint $table) {
//            $table->bigIncrements('id'); auto increment big Integer
            $table->increments('id');
            $table->string('znacka');//STRING funkcia je ako varchar ak nedame velkost tak 255
            $table->string('model');
            $table->string('farba');
            $table->timestamps();//vytvori dva stlpce created_at a updated_at a same sa aktualizuju
        });
        //po vytvoreni tabulky migrovat do databazy php artisan migrate
    }
    //vratit operaciu spat php artisan migrate:rollback

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //Metóda down() sa vykonáva pri tzv. rollback procese.
    public function down()
    {
        Schema::dropIfExists('auto');
    }
}
