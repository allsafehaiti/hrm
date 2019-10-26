<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Model\DossierEmploye\DossierEmploye;
use App\Model\DossierEmploye\Skill;
use App\Model\DossierEmploye\EmployeSkill;
use App\Model\DossierEmploye\Experience;
use App\Model\DossierEmploye\Profession;
use App\Http\Requests\FormulaireDossierEmploye;

use Illuminate\Support\Facades\Crypt;
use Redirect;
use PDF;
use Storage;
use DNS2D;

class DossierEmployeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDossier(Request $request)
    {

        $listeProfession=Profession::all();
        $listeCompetance=Skill::all();
        return response()->view('enregistrement',['listeProfession'=>$listeProfession,
        'listeCompetance'=>$listeCompetance]);
    }


    public function store(FormulaireDossierEmploye $request)
    {
        $dossier=new DossierEmploye ;
        $dossier->Nom=$request->input('Nom');
        $dossier->Prenom=$request->input('Prenom');
        $dossier->Email=$request->input('Email');
        $dossier->Cin=$request->input('Cin');
        $dossier->DateNaissance=$request->input('DateNaissance');
        $dossier->Profession=$request->input('Profession');
        $dossier->Sexe=$request->input('Sexe');
        $dossier->StatutMatrimonial=$request->input('StatutMatrimonial');
        $dossier->Telephone=$request->input('Telephone');
        $dossier->Adresse=$request->input('Adresse');
        $dossier->LieuNaissance=$request->input('LieuNaissance');
        $dossier->Nif=$request->input('Nif');
        $dossier->save();
   ////////Competence///////////
        for($i=0;$i<count($request->input('Competance'));$i++){

                $skill=new EmployeSkill;
                $skill->DossierEmployeID=$dossier->id;
                $skill->SkillId=$request->input('Competance')[$i];
                $skill->save();

        }
/////////Experience//////////////////////////
        for($i=0;$i<count($request->input('Poste'));$i++)
        {
            if($request->input('Poste')[$i]!='')
            {
                $experience=new Experience;
                $experience->Poste=$request->input('Poste')[$i];
                $experience->FromDate=$request->input('DateDebutPoste')[$i];
                $experience->ToDate=$request->input('DateFinPoste')[$i];
                $experience->EmployeId=$dossier->id;
                $experience->save();

            }
        }




        return response("Sauvegarde Reussi",200);

    }


    public function show($id)
    {
        return DossierEmploye::find($id);
    }


    public function edit($dossier)
    {
        $dossier=DossierEmploye::find($dossier);


        return response()->view('modifierDossier',['dossierEmploye'=>$dossier]);
    }

    public function editPost(Request $request,$dossier)
    {
        Validator::make($request->all(), [
            'Nom'=>'required','Prenom'=>'required',
                'Sexe'=>'required','DateNaissance'=>'required',
                'LieuNaissance'=>'required','Cin'=>'required',
                'Nif'=>'required','Adresse'=>'required','Telephone'=>'required',
                'Email'=>'required|email','Profession'=>'required','StatutMatrimonial'=>'required'
        ])->validate();
        $dossier=DossierEmploye::find($dossier);
        $dossier->Nom=$request->input('Nom');
        $dossier->Prenom=$request->input('Prenom');
        $dossier->Email=$request->input('Email');
        $dossier->Cin=$request->input('Cin');
        $dossier->DateNaissance=$request->input('DateNaissance');
        $dossier->Profession=$request->input('Profession');
        $dossier->Sexe=$request->input('Sexe');
        $dossier->StatutMatrimonial=$request->input('StatutMatrimonial');
        $dossier->Telephone=$request->input('Telephone');
        $dossier->Adresse=$request->input('Adresse');
        $dossier->LieuNaissance=$request->input('LieuNaissance');
        $dossier->Nif=$request->input('Nif');
        $dossier->save();
         ////////Competence///////////
         //////delete before///////
         EmployeSkill::where('DossierEmployeId','=',$dossier->id)->delete();
         for($i=0;$i<count($request->input('Competance'));$i++){

            $skill=new EmployeSkill;
            $skill->DossierEmployeID=$dossier->id;
            $skill->SkillId=$request->input('Competance')[$i];
            $skill->save();

    }
/////////Experience//////////////////////////
 Experience::where('EmployeId','=',$dossier->id)->delete();
    if($request->input('Poste'))
    {
            for($i=0;$i<count($request->input('Poste'));$i++)
        {
            if($request->input('Poste')[$i]!='')
            {
                $experience=new Experience;
                $experience->Poste=$request->input('Poste')[$i];
                $experience->FromDate=$request->input('DateDebutPoste')[$i];
                $experience->ToDate=$request->input('DateFinPoste')[$i];
                $experience->EmployeId=$dossier->id;
                $experience->save();

            }
        }
    }

    return response('Modification effectue avec Succes',200);
    }




    public function destroy($id)
    {
       $dossier=DossierEmploye::find($id);
       $dossier->Status='suspendu';
       $dossier->save();
    }
    public function listeProfession()
    {
        return response()->json(Profession::all());
    }
    public function listeSkills()
    {
        return response()->json(Skill::all());
    }
    public function listeDossier()
    {
        return response()->view('listeDossierEmploye',['listeDossierEmploye'=>DB::table('dossieremploye')->select('id','Nom','Prenom','Nif','Sexe','Profession','created_at','updated_at','Email')->get()]);
    }

    ///badge///


       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createBadge($id)
    {

        $dossier=DossierEmploye::find($id);

       Storage::disk('public')->put('barcode-'.$id.'.png',base64_decode(DNS2D::getBarcodePNG(substr("000000000{$id}",-9), "PDF417")));
        return response()->view('badge',['dossierEmploye'=>$dossier]);
    }

    public function downloadPDF($id){
        $dossierEmploye = DossierEmploye::find($id);
            $pdf = PDF::loadView('pdf', compact('dossierEmploye'));
        return $pdf->download('badge.pdf');
    }

    public function ll()
    {
        $dossier=DossierEmploye::find(15);
        return response()->view('pdf',['dossierEmploye'=>$dossier]);
    }

}

