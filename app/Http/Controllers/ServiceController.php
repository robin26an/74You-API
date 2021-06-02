<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    function list($id = null)
    {
        return $id ? Service::find($id) : Service::all();
    }

}
