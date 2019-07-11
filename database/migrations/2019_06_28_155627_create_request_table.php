<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->bigIncrements('id');// id unico
            $table->string('code',10); // codigo solicitado por estrategias
            $table->integer('affiliate_id'); // id afiliado
            $table->integer('user_id'); // id usuario
            $table->integer('area_id'); // id area
            $table->integer('modality_id'); // id modalidad
            $table->integer('type_id'); // id tipo de la modalidad
            $table->date('request_date'); // fecha de solicitud
            $table->smallInteger('request_amount'); // monto solicitado
            $table->integer('citie_request_id'); // id lugar de la solicitud 
            $table->integer('liquid_payable'); // liquido pagable
            $table->integer('request_status_id'); // estado del tramite
            $table->integer('location_request_id'); // ubicacion del tramite
            $table->boolean('approval_committee'); // aprobado true o false
            $table->integer('contract_id'); // id contrato
            $table->smallInteger('mount_approved'); // monto aprobado
            $table->integer('approved_term'); // termino aprobado
            $table->integer('requested_term'); // termino solicitado
            $table->integer('monthly_fee'); //cuota mensual
            $table->integer('index_indebtedness'); // indice de endeudamiento
            $table->integer('check_number'); // numero de cheque
            $table->integer('disbursement_date'); //fecha de desembolso
            $table->integer('first_guarantor_id'); // id garante1
            $table->integer('second_guarantor_id'); // id garante2   
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
        Schema::dropIfExists('request');
    }
}
