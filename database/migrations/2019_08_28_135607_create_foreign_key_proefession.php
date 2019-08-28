<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyProefession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('DossierEmploye', function (Blueprint $table) {
           $table->foreign('Profession')->references('id')->on('professions')
           ->onDelete('cascade')
           ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dossierEmploye', function (Blueprint $table) {
            $table->dropForeign('Profession');
        });
    }
}
