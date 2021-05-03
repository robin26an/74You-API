<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;


class UsersController extends Controller
{
    function list($id=null)
    {
        return $id?Users::find($id):Users::all();
    }

    function add(Request $req)
    {
        $users = new Users;
        $users->id = $req->id;
        $users->name = $req->name;
        $users->email = $req->email;
        $users->email_verified_at = $req->email_verified_at;
        $users->password = $req->password;
        $users->remember_token = $req->remember_token;
        $users->created_at = $req->created_at;
        $users->updated_at = $req->updated_at;
        $result = $users->save();
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
        $users = new Users;
        $users->id = $req->id;
        $users->name = $req->name;
        $users->email = $req->email;
        $users->email_verified_at = $req->email_verified_at;
        $users->password = $req->password;
        $users->remember_token = $req->remember_token;
        $users->created_at = $req->created_at;
        $users->updated_at = $req->updated_at;
        $result = $users->save();
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
