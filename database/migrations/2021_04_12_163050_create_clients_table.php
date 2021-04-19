<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('empresa')->nullable();
            $table->string('razao_social')->nullable();
            $table->string('cpf_cnpj')->nullable();
            $table->foreignId('niche_id')->nullable()->constrained();
            $table->string('representante')->nullable();
            $table->string('cpf_representante')->nullable();
            $table->string('telefone')->nullable();
            $table->string('cep')->nullable();
            $table->string('uf')->nullable();
            $table->string('cidade')->nullable();         
            $table->string('bairro')->nullable();        
            $table->string('rua')->nullable();
            $table->string('numero')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('outras_redes')->nullable();
            $table->string('site')->nullable();
            $table->string('status')->nullable();
            $table->string('tipo')->nullable();
            $table->string('estagio')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
