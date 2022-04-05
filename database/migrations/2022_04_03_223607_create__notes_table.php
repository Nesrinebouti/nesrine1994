<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Notes', function (Blueprint $table) {
           $table->id();
            $table->string('type');
            $table->string('note');
            $table->foreignId('Etudiants_id')->constrained('Etudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('Modules_id')->constrained('Modules')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Notes');
    }
}
