<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    function list($id=null)
    {
        return $id?Category::find($id):Category::all();
    }

    function add(Request $req)
    {
        $category = new Category;
        $category->id = $req->id;
        $category->label = $req->label;
        $result = $category->save();
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
        $category = new Category;
        $category->id = $req->id;
        $category->label = $req->label;
        $result = $category->save();
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
