<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('fantasia')->nullable();
            $table->string('tipo', 2); // PF = Pessoa Fisica | PJ = Pessoa Juridica
            $table->string('documento', 20); // CPF ou CNPJ
            $table->string('cep', 10)->nullable();
            $table->string('logradouro', 255)->nullable();
            $table->string('numero', 5)->nullable();
            $table->string('complemento', 255)->nullable();
            $table->string('bairro', 180)->nullable();
            $table->string('localidade', 100)->nullable();
            $table->string('uf', 2)->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('fornecedor');
    }
}
