<?php

use App\Model\DossierEmploye\DossierEmploye;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('loginHrm');
});
Route::get('accueil',function(){
    return view('general');
});
Route::post('dossierEmploye','Controller\DossierEmployeController@store')->name('dossierEmploye');
Route::get('enregistrement','Controller\DossierEmployeController@create')->name('enregistrement');
Route::get('api/listeProfession','Controller\DossierEmployeController@listeProfession');
Route::get('api/listeSkills','Controller\DossierEmployeController@listeSkills');
Route::get('dossierEmploye/{id}','Controller\DossierEmployeController@edit');
Route::get('listeDossierEmploye','Controller\DossierEmployeController@listeDossier');
Route::post('modifDossierEmploye/{id}','Controller\DossierEmployeController@editpost');
Route::get('loginForm','Controller\utilisateurController@loginForm');
Route::post('loginForm','Controller\utilisateurController@register');
Route::post('login','Controller\utilisateurController@login');
Route::get('logout','Controller\utilisateurController@loggout');
////////////////////
Route::get('resetUser/{id}','Controller\utilisateurController@resetUser');
Route::get('reactivateUser/{id}','Controller\utilisateurController@reactivateUser');
Route::get('deleteUser/{id}','Controller\utilisateurController@deleteUser');
Route::get('modifierMdp',function()
{
    return view('modifierMdp');
});
Route::post('changerMdp','Controller\utilisateurController@changerMdp');
///////////////////////bar-CODE/////////////////

Route::get('createBadge/{id}','Controller\DossierEmployeController@createBadge');
Route::get('downloadPDF/{id}','Controller\DossierEmployeController@downloadPDF');

Route::get('ll','Controller\DossierEmployeController@ll');
//////Presence////////////////
Route::get('listPresence', 'Controller\GestionPresenceController@list')->name('listPresence');
Route::get('urlMJ/{id}','Controller\GestionPresenceController@verifierUrlMJ');