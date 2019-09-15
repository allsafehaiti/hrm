<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormulaireUtilisateur;
use App\Model\DossierEmploye\DossierEmploye;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;

class utilisateurController extends Controller
{
    public function registerForm(Request $request)
    {
        return response()->view('register');
    }
    public function register(FormulaireUtilisateur $request)
    {
        $utilisateur=new User;
        $utilisateur->nomUtilisateur=$request->input('nomUtilisateur');
        $utilisateur->motDePasse=Hash::make($request->input('motDePasse'));
        $utilisateur->status=2;
        $utilisateur->roles=$request->input('roles');
        $utilisateur->idDossier=$request->input('idDossier');
        $utilisateur->save();
        return response()->json($utilisateur);
    }
    public function login(Request $request)
    {
        if(Auth::attempt(['nomUtilisateur' => $request->input('nomUtilisateur'), 'password' => $request->input('motDePasse')]))
        {
            if(Auth::user()->status==1 || Auth::user()->status==2)
            return response()->json(['status'=>'ok']);
            else
            {
                Auth::logout();
                return response('erreur compte suspendu',400);
            }

        }
        else
        return response('erreur mauvais mot de passe ou nom utilisateur',400);
    }
    public function loginForm()
    {
        return response()->view('loginForm');
    }
    public function loggout(Request $request)
    {
        Auth::logout();
        return view('loginHrm');
    }

    public function resetUser(Request $request,$id)
    {
       $compte= DossierEmploye::find($id)->Compte();
       $compte->update(['status'=>2,'motDePasse'=>Hash::make('password')]);
       return response()->json(['status'=>'ok']);
    }

    public function deleteUser(Request $request,$id)
    {
        $compte= DossierEmploye::find($id)->Compte();
        $compte->update(['status'=>0]);
        return response()->json(['status'=>'ok']);
    }
    public function reactivateUser(Request $request,$id)
    {
        $compte= DossierEmploye::find($id)->Compte();
        $compte->update(['status'=>2]);
        return response()->json(['status'=>'ok']);
    }

    public function changerMdp(Request $request)
    {
        if(Hash::check($request->input('ancienMdp'),Auth::user()->motDePasse))
        {
            $user=Auth::user();
            $user->update(['motDePasse'=>Hash::make($request->input('nouveauMdp'))]);
            return response('Mot de passe change avec succes',200);
        }
        else{
            return response("Erreur Mot De passe incorrect",400);
        }

    }
}
