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
        Schema::create('campaña', function (Blueprint $table) {
            $table->id('id_campaña');
            $table->string('nom_campaña', 25);
            $table->string('tip_campaña', 25);
            $table->date('fec_campaña');
            $table->date('fec_compra');
            
            $table->timestamps();
        });//
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
