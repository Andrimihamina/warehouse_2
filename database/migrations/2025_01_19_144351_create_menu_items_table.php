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
            Schema::create('menu_items', function (Blueprint $table) {
                $table->id();  // Auto-incrementing primary key
                $table->string('name');  // The name of the menu item
                $table->string('url');  // The URL of the menu item
                $table->string('icon');  // The icon class for the menu item (e.g., FontAwesome icon)
                $table->boolean('is_active')->default(true);  // To control if the menu item is active or not
                $table->integer('order')->default(0);  // The order of the menu item
                $table->timestamps();  // Timestamps for created_at and updated_at
            });
        }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
