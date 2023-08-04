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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('identificacion')->nullable()->unique();
            $table->string('provincia')->nullable();
            $table->string('canton')->nullable();
            $table->string('parroquia')->nullable();
            $table->string('recinto')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('lugar_nacimiento')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->enum('estado_civil',['SOLTERO','CASADO','DIVORCIADO','VIUDO','UNIÓN LIBRE'])->nullable();
            $table->string('foto')->nullable();
            $table->string('foto_identificacion')->nullable();
            $table->enum('estado',['ACTIVO','INACTIVO'])->nullable();
            $table->enum('sexo',['HOMBRE','MUJER'])->nullable();


            $table->date('fecha_ingreso')->nullable();
            $table->enum('etnia',[
                    'Mestizos',
                    'Blancos',
                    'Indígenas',
                    'Mulatos',
                    'Negros',
                    'Otros',
            ])->nullable();

            $table->enum('discapacidad',['SI','NO'])->default('NO');
            $table->string('tipo_discacipacidad')->nullable();
            $table->integer('porcentaje_discapacidad')->nullable();
            $table->string('numero_miembros_familia')->nullable();
            $table->string('tipo_sangre')->nullable();
            $table->string('departamento')->nullable();
            $table->string('rol')->nullable();
            $table->string('experiencia')->nullable();
            $table->string('tienecarro_modelo')->nullable();


            $table->bigInteger('creado_x')->nullable();
            $table->bigInteger('actualizado_x')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
