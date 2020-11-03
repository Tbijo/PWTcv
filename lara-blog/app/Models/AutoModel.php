<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutoModel extends Model
{
    //vytvorenie modelu predtym nastavit sa do Models dir - php ../../artisan make:model Models/AutoModel
    protected $table = 'auto';//nazov tabulky
    //nazvy stlpcov
    protected $fillable = ['znacka', 'model', 'farba'];
}
