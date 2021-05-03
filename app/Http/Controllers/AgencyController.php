<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Agency;


class AgencyController extends Controller
{
    function list($id=null)
    {
        return $id?Agency::find($id):Agency::all();
    }

    function add(Request $req)
    {
        $agency = new Agency;
        $agency->id = $req->id;
        $agency->address = $req->address;
        $agency->ville = $req->ville;
        $agency->postcode = $req->postcode;
        $result = $agency->save();
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
        $agency = new Agency;
        $agency->id = $req->id;
        $agency->address = $req->address;
        $agency->ville = $req->ville;
        $agency->postcode = $req->postcode;
        $result = $agency->save();
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
