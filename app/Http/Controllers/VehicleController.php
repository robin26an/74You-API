<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vehicle;


class VehicleController extends Controller
{
    function list($id=null)
    {
        return $id?Vehicle::find($id):Vehicle::all();
    }

    function add(Request $req)
    {
        $vehicle = new Vehicle;
        $vehicle->id = $req->id;
        $vehicle->model_id = $req->model_id;
        $vehicle->numberPlate = $req->numberPlate;
        $vehicle->kilometers = $req->kilometers;
        $vehicle->agency_id = $req->agency_id;
        $vehicle->purchaseDate = $req->purchaseDate;
        $result = $vehicle->save();
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
        $vehicle = new Vehicle;
        $vehicle->id = $req->id;
        $vehicle->model_id = $req->model_id;
        $vehicle->numberPlate = $req->numberPlate;
        $vehicle->kilometers = $req->kilometers;
        $vehicle->agency_id = $req->agency_id;
        $vehicle->purchaseDate = $req->purchaseDate;
        $result = $vehicle->save();
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
