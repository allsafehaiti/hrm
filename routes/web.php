<?php

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
    return view('general');
});
Route::post('dossierEmploye','Controller\DossierEmployeController@store')->name('dossierEmploye');
Route::get('enregistrement','Controller\DossierEmployeController@create')->name('enregistrement');
Route::get('api/listeProfession','Controller\DossierEmployeController@listeProfession');
Route::get('api/listeSkills','Controller\DossierEmployeController@listeSkills');
Route::get('dossierEmploye/{id}','Controller\DossierEmployeController@edit');
Route::get('listeDossierEmploye','Controller\DossierEmployeController@listeDossier');
Route::post('modifDossierEmploye/{id}','Controller\DossierEmployeController@editpost');
