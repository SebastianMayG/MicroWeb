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
        Schema::create('datos_empresa', function (Blueprint $table) {
            $table->id();
            $table->string('rfc');
            $table->string('regimen_fiscal');
            $table->string('direccion_codigo_postal');
            $table->string('nombre_razon_social');
            $table->string('email');
            $table->string('logo')->nullable();
            $table->boolean('contestado')->default(false); // Nuevo campo para indicar si el formulario ha sido contestado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mi_empresas');
    }
};
