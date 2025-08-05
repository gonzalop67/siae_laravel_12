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
        Schema::create('permisos_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('permiso_id');
            $table->foreign('permiso_id', 'fk_permisorol_permiso')
                    ->references('id')
                    ->on('permisos')
                    ->onDelete('cascade')
                    ->onUpdate('restrict');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id', 'fk_permisorol_rol')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('cascade')
                    ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos_roles');
    }
};
