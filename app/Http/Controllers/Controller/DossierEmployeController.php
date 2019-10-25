<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
    public function index()
    {
        return DossierEmploye::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $listeProfession=Profession::all();
        $listeCompetance=Skill::all();
        return response()->view('enregistrement',['listeProfession'=>$listeProfession,
        'listeCompetance'=>$listeCompetance]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DossierEmploye::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dossier=DossierEmploye::find($id);
        $dossier::update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        return response()->view('listeDossierEmploye',['listeDossierEmploye'=>DossierEmploye::all()]);
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
       // dd($id);
      // $encrypted = Crypt::encryptString($id);
      // $decrypted = Crypt::decryptString($encrypted);
       //dd($encrypted);
      // dd($decrypted);
        $dossier=DossierEmploye::find($id);
       // $image =\QrCode::format('png')
               // ->size(120)
               // ->generate($encrypted);
       // $output_file ='/img/qr-code/img-'.$id.'.png';
       // Storage::disk('public')->put($output_file, $image);//storage/app/public/img/qr-code/img-54343.png
       Storage::disk('public')->put('barcode-'.$id.'.png',base64_decode(DNS2D::getBarcodePNG(substr("000000000{$id}",-9), "PDF417")));
        return response()->view('badge',['dossierEmploye'=>$dossier]);
    }

    public function downloadPDF($id){
        $dossierEmploye = DossierEmploye::find($id);
            $pdf = PDF::loadView('pdf', compact('dossierEmploye'));
        return $pdf->download('badge.pdf'); 
   // dd('ok');
    }

    public function ll()
    {       
        $dossier=DossierEmploye::find(15);
        return response()->view('pdf',['dossierEmploye'=>$dossier]);
    }

}

