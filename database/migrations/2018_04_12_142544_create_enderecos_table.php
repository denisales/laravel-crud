<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cadastro')->unsigned();
            $table->foreign('id_cadastro')->references('id')->on('cadastros');
            $table->string('logradouro',200)->nullable();
            $table->string('numero',4)->nullable();
            $table->string('cep',15)->nullable();
            $table->string('bairro',150)->nullable();
            $table->string('cidade',150)->nullable();
            $table->string('estado',150)->nullable();
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
        Schema::dropIfExists('enderecos');
    }
}
