<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
    $connexion = request(['email','password']);
    if(auth()->attempt($connexion)){
        return Auth::user();
    }
    //dd(Auth::user());
        return response()->json([],401);
    }

    public function logout()
    {
        auth()->logout();
    }

    public function attempt($id)
    {
        $user=User::find($id);
        return response()->json(Auth::viaRemember());
    }
}
