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
        Schema::create('facturacions', function (Blueprint $table) {
            $table->id();
            $table->string('rfc_Rec');
            $table->string('regimenFiscal_Rec');
            $table->string('CP_Rec');
            $table->string('usoCFDI_Rec');
            $table->string('razonSocial_Rec');
            $table->strinf('email_Rec');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturacions');
    }
};
