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
        Schema::create('articles', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); // Ajoute cette ligne
            $table->foreign('user_id')->references('id')->on('users'); // Ajoute cette ligne pour définir la clé étrangère
            $table->id();
            $table->string('titre');
            $table->longText('contenu')->nullable();
            $table->string('categorie')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
