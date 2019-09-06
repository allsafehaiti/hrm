<?php

namespace App\Model\DossierEmploye;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table='experiences';
    protected $guarded=[];
    public $timestamps=false;

    public function DossierEmploye()
    {
        return $this->belongsTo('App\Model\DossierEmploye\DossierEmploye','EmployeId');
    }
}
