<?php

namespace App\Model\DossierEmploye;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table='professions';
    protected $guarded=[];

    public function DossierEmploye()
    {
        return $this->hasMany('App\Model\DossierEmploye\DossierEmploye','Profession');
    }
}
