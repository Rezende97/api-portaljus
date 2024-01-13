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
        Schema::create('processos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_reclamante');
            $table->unsignedBigInteger('id_reclamada');
            $table->string('num_processo')->unique();
            $table->string('observacao');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_reclamante')->references('id')->on('reclamantes');
            $table->foreign('id_reclamada')->references('id')->on('reclamadas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processos');
    }
};
