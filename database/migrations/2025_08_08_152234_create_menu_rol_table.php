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
        Schema::create('menu_role', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id', 'fk_menurol_menu')
                ->references('id')
                ->on('menus')
                ->onDelete('cascade')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id', 'fk_menurol_rol')
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
        Schema::dropIfExists('menu_role');
    }
};
