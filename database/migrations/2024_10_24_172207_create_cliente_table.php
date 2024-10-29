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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nom_cliente',45);
            $table->string('ape_cliente',45);
            $table->string('dni_cliente', 7)->unique();
            $table->string('direccion_cliente',45);
            $table->date('fec_cliente',10);
            $table->string('gen_cliente', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
