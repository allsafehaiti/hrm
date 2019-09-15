<?php

namespace App\Model\DossierEmploye;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table='skills';
    protected $guarded=[];
    public function DossierEmploye()
    {
        return $this->belongsToMany('App\Model\DossierEmploye\DossierEmploye','employe_skills','DossierEmployeID','SkillId');
    }
}
