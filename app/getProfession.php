<?php
namespace App;
use App\Model\DossierEmploye\Profession;
class getProfession
{
    public function getProfession($key)
    {
        return Profession::find($key)->Description;
    }
}
