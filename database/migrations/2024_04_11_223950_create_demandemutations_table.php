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
        Schema::create('demandemutations', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('motif');
            $table->enum('statut', ['en_attente', 'acceptée', 'refusée'])->default('en_attente');
            $table->integer('nombre_annees_travaillees');
            $table->enum('direction', ['gafsa', 'sousse', 'mahdia', 'sfax', 'bizert', 'beja', 'kef', 'tunisie']);
            $table->foreign('matricule')->references('matricule')->on('users')->onDelete('cascade');
            // Ajout de la clé étrangère
          
        
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
        Schema::dropIfExists('demandemutations');
    }
      /**
     * Reverse the migrations.
     *
     * @return void
     */
    
};
