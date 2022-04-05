<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Options', function (Blueprint $table) {
             $table->id();
            $table->string('Libelle');
            $table->string('Niveux');

        });
    }

    public function down()
    {
        Schema::dropIfExists('Options');
    }
}
