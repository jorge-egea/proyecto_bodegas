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
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("direccion");
            $table->string("email");
            $table->string("telefono");
            $table->string("persona_contacto");
            $table->string("ano_fundacion");
            $table->string("descripcion")->nullable();
            $table->tinyInteger("restaurante");
            $table->tinyInteger("hotel");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodegas');
    }
};
