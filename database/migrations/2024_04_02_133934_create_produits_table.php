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
        Schema::create('produits', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string("designation");
            $table->string("description");
            $table->decimal("price",8,2);
            $table->string("image");
            $table->string("category");
            $table->string("materials");
            $table->foreignUuid("artisan_uuid")->references("uuid")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
