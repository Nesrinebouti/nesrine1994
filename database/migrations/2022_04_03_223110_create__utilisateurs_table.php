<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Utilisateurs', function (Blueprint $table) {
           $table->id('Num');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('DateDeNaisance');
            $table->string('Grade')->unique();
            $table->string('Photo');
            $table->string('Role');
            if (Role==0) { 
                Admin;
            }
            else{ Enseignants;}
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Utilisateurs');
    }
}
