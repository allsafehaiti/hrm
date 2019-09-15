<?php

namespace App\Model\DossierEmploye;

use Illuminate\Database\Eloquent\Model;

class DossierEmploye extends Model
{
   protected $table='dossieremploye';
   protected $guarded=[];

   public function Skills()
   {
      return $this->belongsToMany('App\Model\DossierEmploye\Skill','employe_skills','DossierEmployeId','SkillId');
   }
   public function ProfessionEmploye()
   {
      return $this->belongsTo('App\Model\DossierEmploye\Profession','Profession');
   }
   public function Experiences()
   {
      return $this->hasMany('App\Model\DossierEmploye\Experience','EmployeId');
   }
   public function Compte()
   {
       return $this->hasOne('App\User','idDossier');
   }

}
