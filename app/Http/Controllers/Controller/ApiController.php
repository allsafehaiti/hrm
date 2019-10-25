<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth;

class ApiController extends Controller
{
    public function connecter($username,$password)
    {
        if(Auth::attempt(['nomUtilisateur' => $username, 'password' => $password]))
        {
            Auth::logout();
            return response()->json(['st'=>'ok']);
        }else
        {
            return response()->json(['st'=>'nonok']);
        }
    }
}
