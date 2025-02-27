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
        Schema::create('estanterias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tema_id')->constrained()->onDelete('cascade');
            $table->foreignId('biblioteca_id')->constrained()->onDelete('cascade');
            $table->string('codigo', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estanterias');
    }
};
