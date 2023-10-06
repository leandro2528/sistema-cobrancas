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
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('cobrador_id');
            $table->foreign('cobrador_id')->references('id')->on('collectors')->onDelete('cascade')->onUpdate('cascade');
            $table->date('data_cobranca');
            $table->decimal('valor_emprestado', 10, 2)->nullable();
            $table->decimal('valor_pagar', 10, 2);
            $table->decimal('valor_dia', 10, 2)->nullable();
            $table->integer('total_parcelas')->nullable();
            $table->integer('parcela_atual')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->string('status_pagamento')->nullable();
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charges');
    }
};
