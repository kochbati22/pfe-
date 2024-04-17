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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
             
            $table->string('name');
            $table->string('prenom');
            $table->string('telephone')->nullable();
            $table->string('cv')->nullable();
            $table->string('adresse')->nullable();
            $table->decimal('soldeconge', 10, 2)->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('cin');
            $table->date('date_naissance')->nullable();
            $table->enum('role', ['super_admin', 'rh', 'postier'])->default('postier');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
