<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('animals', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('especie');
        $table->integer('edad');
        $table->string('raza')->nullable();
        $table->text('descripcion')->nullable();
        $table->boolean('disponible')->default(true);
        $table->timestamps();
    });
}
   /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};