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
        Schema::create('artisans', function (Blueprint $table) {
            $table->foreignUuid("user_uuid")->references('uuid')->on('users');
            $table->integer("products");
            $table->integer("products_sold");
            $table->integer("avis");
            $table->decimal("note",2,2);
            $table->string("story");
            $table->string("production_style");
            $table->string("materials");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisans');
    }
};
