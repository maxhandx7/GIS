<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('numero_contrato');
            $table->string('proceso_secop')->nullable();
            $table->string('entidad');
            $table->text('objeto');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('valor_total', 15, 2);
            $table->string('estado')->default('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
