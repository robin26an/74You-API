<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    function list($id=null)
    {
        return $id?Customer::find($id):Customer::all();
    }

    function add(Request $req)
    {
        $customer = new Customer;
        $customer->id = $req->id;
        $customer->firstname = $req->firstname;
        $customer->lastname = $req->lastname;
        $customer->streetaddress = $req->streetaddress;
        $customer->postcode = $req->postcode;
        $customer->city = $req->city;
        $customer->drivingLicense = $req->drivingLicense;
        $result = $customer->save();
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
        $customer = new Customer;
        $customer->id = $req->id;
        $customer->firstname = $req->firstname;
        $customer->lastname = $req->lastname;
        $customer->streetaddress = $req->streetaddress;
        $customer->postcode = $req->postcode;
        $customer->city = $req->city;
        $customer->drivingLicense = $req->drivingLicense;
        $result = $customer->save();
        if($result)
        {
            return ["Resultat"=>"Données modifiées"];
        }
        else
        {
            return ["Resultat"=>"Modification échouée"];
        }

    }

    function delete($id)
    {
        $customer= Customer::find($id);
        $result=$customer->delete();
        if($result)
        {
            return ["Resultat"=>"Données supprimées"];
        }
        else
        {
            return ["Resultat"=>"suppression echouée"];
        }

    }
}
