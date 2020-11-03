<?php

namespace App\Http\Controllers;

use App\Models\AutoModel;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    //kontroler pozijeme na CRUD operacie a nasledne zadefinujeme cesty v Routes/php
    public function showAction($id)
    {
        $auto = AutoModel::find($id);//funkcia zdedena z Laravel
        //zoberie z databazy auto podla ID

        //takto sa to nerobi vystupi dat do view
        echo $auto->znacka . "<br>";
        echo $auto->model . "<br>";
        echo $auto->farba . "<br>";
    }

    public function insertAction()
    {
        $auto = new AutoModel();
        $auto->znacka = "Toyota";
        $auto->model = "Supra";
        $auto->farba = "Modra";
        //hodilo by sa pridat created_at a updated_at
        $auto->save();
    }

    public function updateAction($id)
    {
        $auto = AutoModel::where("id", "=", $id)->first();
        //where nahradza find je vhodnejsia na hladanie ako WHERE claus
        //ale treba pridat FIRST
        $auto->update(["farba" => "Oranzova"]);
        //update prijima pole hodnot ktore chceme zamenit
    }

    public function deleteAction($id)
    {
        $auto = AutoModel::find($id);
        $auto->delete();
    }

    public function showAllAction()
    {
        $auta = AutoModel::all();//all je ako SELECT *
        foreach ($auta as $auto) {
            echo $auto->znacka . " " . $auto->model . " " . $auto->farba . "<br>";
        }
    }
}
