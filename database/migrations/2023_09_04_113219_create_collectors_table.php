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
        Schema::create('collectors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_collector');
            $table->foreign('id_collector')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome', 55);
            $table->string('endereco',100);
            $table->string('idade');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('rg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collectors');
    }
};
