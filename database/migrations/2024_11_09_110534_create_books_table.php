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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('isbn')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('publish_year');
            $table->unsignedInteger('number_of_pages');
            $table->unsignedInteger('number_of_copies');
            $table->decimal('price',8,2);
            $table->string('cover_image');
            $table->foreignId('category_id')->nullable()->constrained()->OnDelete('set null');
            $table->foreignId('publisher_id')->nullable()->constrained()->OnDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
