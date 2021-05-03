<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rental;


class RentalController extends Controller
{
    function list($id=null)
    {
        return $id?Rental::find($id):Rental::all();
    }

    function add(Request $req)
    {
        $rental = new Rental;
        $rental->id = $req->id;
        $rental->vehicle_id = $req->vehicle_id;
        $rental->startDate = $req->startDate;
        $rental->endDate = $req->endDate;
        $rental->kilometers = $req->kilometers;
        $rental->startAgency_id = $req->startAgency_id;
        $rental->endAgency_id = $req->endAgency_id;
        $rental->customer_id = $req->customer_id;
        $result = $rental->save();
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
        $rental = new Rental;
        $rental->id = $req->id;
        $rental->vehicle_id = $req->vehicle_id;
        $rental->startDate = $req->startDate;
        $rental->endDate = $req->endDate;
        $rental->kilometers = $req->kilometers;
        $rental->startAgency_id = $req->startAgency_id;
        $rental->endAgency_id = $req->endAgency_id;
        $rental->customer_id = $req->customer_id;
        $result = $rental->save();
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
