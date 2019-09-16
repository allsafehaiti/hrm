<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $guarded=[];
    public function username()
    {
        return $this->nomUtilisateur;
    }
    public function getAuthPassword()
    {
        return $this->motDePasse;
    }
    public function dossierEmploye()
    {
        return $this->belongsTo('App\Model\DossierEmploye\DossierEmploye','idDossier');
    }
}
