<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use App\Model\DossierEmploye\Presence;
use App\Model\DossierEmploye\DossierEmploye;
use Illuminate\Http\Request;


class GestionPresenceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(){
        return response()->view('listPresence',['list'=>Presence::all(),'employes'=>DossierEmploye::all()]);
    }
    public function verifierUrlMJ($id){
        $emp = DossierEmploye::findOrFail($id);
        
        if($emp->id !=''){
        //dd('ok');
        $present= new Presence();
        $present->employeId=$id;
        $present->isPresent=1;
        $present->created_at=now();
        $present->save();
        return response()->view('listPresence',['list'=>Presence::all(),'employes'=>DossierEmploye::all()]);
        }
    }
}
