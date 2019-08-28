<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossierEmploye extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DossierEmploye', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Sexe');
            $table->DateTime('DateNaissance');
            $table->string('LieuNaissance');
            $table->BigInteger('Cin');
            $table->BigInteger('Nif');
            $table->string('Adresse');
            $table->string('Telephone');
            $table->string('Email')->unique();
            $table->string('Profession');
            $table->string('StatutMatrimonial');
            $table->text('Competences');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DossierEmploye');
    }
}
