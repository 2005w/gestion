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
        Schema::create('preferencia', function (Blueprint $table) {
            $table->id('id_preferencia');
            $table->string('tip_preferencia',45);
            $table->string('cam_preferencia',45);
            $table->string('int_preferencia',45);
            $table->foreignId('id_cliente')->constrained('cliente', 'id_cliente')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_campaña')->constrained('campaña', 'id_campaña')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferencia');
    }
};
