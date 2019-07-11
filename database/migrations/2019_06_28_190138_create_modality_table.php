<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modality', function (Blueprint $table) {
            $table->bigIncrements('id'); //id unico
            $table->text('description');//descripcion
            $table->text('abbreviation');//averviacion se puede cambiar el nombre
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
        Schema::dropIfExists('modality');
    }
}
