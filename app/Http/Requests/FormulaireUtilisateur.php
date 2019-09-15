<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireUtilisateur extends FormRequest
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
        return [
            'idDossier'=>'required','nomUtilisateur'=>'required','motDePasse'=>'required'
        ];


    }
    public function messages()
    {
        return ['isDossier.required'=>'il est necessaire d \'avoir un dossier pour creer un user',
        'nomUtilisateur.required'=>'Nom utilisateur requis','motDePasse.required'=>'Mot de passe requis'];
    }
}
