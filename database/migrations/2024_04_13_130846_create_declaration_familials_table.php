<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaration_familials', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();
            $table->enum('situation_familiale', ['Célibataire', 'Marié(e)', 'Divorcé(e)', 'Veuf/Veuve']);
            $table->integer('nombre_enfants')->nullable();
            $table->json('details_enfants')->nullable(); // Stocker les détails des enfants sous forme JSON
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declaration_familials');
    }
};
