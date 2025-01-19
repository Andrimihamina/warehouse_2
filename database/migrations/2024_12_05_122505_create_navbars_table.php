<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbarsTable extends Migration
{
    public function up()
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom de l'élément de la navbar
            $table->string('url'); // URL de l'élément
            $table->unsignedBigInteger('parent_id')->nullable(); // Parent pour les sous-menus
            $table->integer('order')->default(0); // Ordre d'affichage
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('navbars');
    }
}

