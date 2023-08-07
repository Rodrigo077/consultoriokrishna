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
        Schema::create('medico_paciente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medico_id');
            $table->unsignedBigInteger('paciente_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('medico_id', 'fk_medico_paciente_medico')
                    ->references('id')
                    ->on('medico')
                    ->onUpdate('NO ACTION')
                    ->onDelete('NO ACTION');
            $table->foreign('paciente_id', 'fk_medico_paciente_paciente')
                    ->references('id')
                    ->on('paciente')
                    ->onUpdate('NO ACTION')
                    ->onDelete('NO ACTION');
            $table->unique(['medico_id', 'paciente_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medico_paciente');
    }
};
