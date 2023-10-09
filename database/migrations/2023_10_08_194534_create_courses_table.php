<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {            
            $table->string('Código da Turma')->nullable();
            $table->string('Nome da Turma')->nullable();
            $table->string('Data de Criação')->nullable();
            $table->string('Data Início')->nullable();
            $table->string('Data Término')->nullable();
            $table->integer('Vagas Disponíveis')->nullable();
            $table->integer('Matrículas')->nullable();
            $table->integer('Reservas')->nullable();
            $table->string('Centro de Custo')->nullable();
            $table->string('Recurso Financeiro')->nullable();
            $table->string('Código do Projeto')->nullable();
            $table->string('Unidade Operativa')->nullable();
            $table->string('Sigla')->nullable();
            $table->integer('CH')->nullable();
            $table->string('Dias de Execução')->nullable();
            $table->string('Estado da Turma')->nullable();
            $table->string('Local')->nullable();
            $table->string('Pré-requisitos')->nullable();
            $table->string('Segmento')->nullable();
            $table->string('Formas de Pagamento')->nullable();
            $table->string('Valor Turma')->nullable();
            $table->string('Valores Ofertas')->nullable();
            $table->string('Impresso por')->nullable();
            $table->string('Data da Impressão')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
