<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Model;


class ModelController extends Controller
{
    function list($id=null)
    {
        return $id?Model::find($id):Model::all();
    }

    function add(Request $req)
    {
        $model = new Model;
        $model->id = $req->id;
        $model->manufacturer_id = $req->manufacturer_id;
        $model->label = $req->label;
        $model->category_id = $req->category_id;
        $model->passengers = $req->passengers;
        $model->gearbox = $req->gearbox;
        $model->doors = $req->doors;
        $model->conditionedAir = $req->conditionedAir;
        $model->gas = $req->gas;
        $model->cost = $req->cost;
        $result = $model->save();
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
        $model = new Model;
        $model->id = $req->id;
        $model->manufacturer_id = $req->manufacturer_id;
        $model->label = $req->label;
        $model->category_id = $req->category_id;
        $model->passengers = $req->passengers;
        $model->gearbox = $req->gearbox;
        $model->doors = $req->doors;
        $model->conditionedAir = $req->conditionedAir;
        $model->gas = $req->gas;
        $model->cost = $req->cost;
        $result = $model->save();
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
