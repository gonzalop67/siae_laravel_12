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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            // Campos propios del programador
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->foreign('menu_id', 'fk_menu_menu')
                    ->references('id')
                    ->on('menus')
                    ->onDelete('cascade')
                    ->onUpdate('restrict');
            $table->string('nombre', 50);
            $table->string('url', 100);
            $table->unsignedInteger('orden')->default(1);
            $table->string('icono', 50)->nullable();
            // Fin Campos propios del programador
            $table->timestamps();
            // Definición de collation
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
