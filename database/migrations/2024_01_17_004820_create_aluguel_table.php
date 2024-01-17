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
        Schema::create('aluguel', function (Blueprint $table) {
            $table->id('aluguel_id');
            $table->integer('livro_id');
            $table->integer('usuario_id');
            $table->integer('dt_aluguel_ini');
            $table->integer('dt_aluguel_fim');
            $table->integer('dt_inclusao');
            $table->integer('dt_alteracao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluguel');
    }
};
