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
        Schema::create('titulos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->enum('nivel',['PRIMER NIVEL','SEGUNDO NIVEL','TERCER NIVEL','CUARTO NIVEL','QUINTO NIVEL']);
            $table->string('archivo');
            $table->foreignId('user_id')->constrained(
                table: 'users'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titulos');
    }
};
