<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\DossierEmploye\Presence;
use App\Model\DossierEmploye\DossierEmploye;
use App\User;

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
    public function verifierPresence($codeBar)
    {
        $user=DossierEmploye::find($codeBar);
        if($user !== null)
        {
            Presence::create(['employeId'=>$codeBar,'isPresent'=>1]);
            return response()->json(['message'=> $user->Nom.' '.$user->Prenom.' a ete enregistre comme present aujourd\'hui' ]);
        }
        else
        return response()->json(['message'=>'Erreur imposible de trouver cet employe']);

    }

}
