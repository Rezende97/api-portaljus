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
        Schema::create('audiencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_audiencia');
            $table->unsignedBigInteger('id_vara');
            $table->unsignedBigInteger('id_regiao');
            $table->unsignedBigInteger('id_adv');
            $table->unsignedBigInteger('id_status');
            $table->timestamp('data_horario_audiencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audiencias');
    }
};
