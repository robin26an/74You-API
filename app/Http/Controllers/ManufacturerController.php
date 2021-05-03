<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Manufacturer;


class ManufacturerController extends Controller
{
    function list($id=null)
    {
        return $id?Manufacturer::find($id):Manufacturer::all();
    }

    function add(Request $req)
    {
        $manufacturer = new Manufacturer;
        $manufacturer->id = $req->id;
        $manufacturer->label = $req->label;
        $result = $manufacturer->save();
        if ($result)
        {
            return ["Resultat" => "Les données ont été enregistrées"];
        }
        else
        {
            return ["Resultat" => "Opération refusée"];
        }
    }

    function update(Request $req)
    {
        $manufacturer = new Manufacturer;
        $manufacturer->id = $req->id;
        $manufacturer->label = $req->label;
        $result = $manufacturer->save();
        if($result)
        {
            return ["Resultat"=>"Données modifiées"];
        }
        else
        {
            return ["Resultat"=>"Modification échouée"];
        }

    }

}
