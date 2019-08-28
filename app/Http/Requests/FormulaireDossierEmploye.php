<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireDossierEmploye extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['Nom'=>'required','Prenom'=>'required',
                'Sexe'=>'required','DateNaissance'=>'required',
                'LieuNaissance'=>'required','Cin'=>'required',
                'Nif'=>'required','Adresse'=>'required','Telephone'=>'required',
                'Email'=>'required','Profession'=>'required','StatutMatrimonial'=>'required',
                'Competences'=>'required'

            
        ];
    }

    public function  messages()
    {
        return [
            'Nom.required'=>'Nom requis','Prenom.required'=>'Prenom requis','Sexe.required'=>'Sexe requis',
            'DateNaissance.required'=>'Date naissance requis','LieuNaissance.required'=>'Lieu naissance requis',
            'Cin.required'=>'Cin requis','Nif.required'=>'Nif requis','Adresse.required'=>'Adresse requis','Telephone.required'=>'Telephone requis',
            'Email.required'=>'Email requis','Profession.required'=>'Profession requis','StatutMatrimonial-required'=>'Status requis',
            'Comptetences.required'=>'Competences requis'
        ];
    }
}
