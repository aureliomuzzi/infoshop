<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('documento', 20)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('whatsapp', 15)->nullable();
            $table->string('cep', 10)->nullable();
            $table->string('logradouro', 255)->nullable();
            $table->string('numero', 5)->nullable();
            $table->string('complemento', 255)->nullable();
            $table->string('bairro', 180)->nullable();
            $table->string('localidade', 100)->nullable();
            $table->string('uf', 2)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
