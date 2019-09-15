<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignEmployeSkill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employe_skills', function (Blueprint $table) {
            $table->foreign('DossierEmployeID')->references('id')->on('DossierEmploye')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('SkillId')->references('id')->on('skills')->onDelete('cascade')
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
        Schema::table('employe_skills', function (Blueprint $table) {
            $table->dropForeign('DossierEmployeID');
            $table->dropForeign('SkillId');
        });
    }
}
