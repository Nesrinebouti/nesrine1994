<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Modules', function (Blueprint $table) {
            $$table->id();
            $table->string('Libelle');
            $table->string('Control');
            $table->string('Tp');
            $table->string('Examen');
            $table->string('Semestre');
            $table->string('Option');
            $table->foreignId('Options_id')->constrained('Options')->onDelete('cascade')->onUpdate('cascade');
        });
    }
     
    public function down()
    {
        Schema::dropIfExists('Modules');
    }
}
