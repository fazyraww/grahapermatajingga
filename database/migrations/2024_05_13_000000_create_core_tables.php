<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Property Categories (Residential, Commercial, High Rise)
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Residential, etc.
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // 2. Clusters / Projects
        Schema::create('clusters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('name'); // Tipe Anggrek, etc.
            $table->string('slug')->unique();
            $table->decimal('price', 15, 2);
            $table->integer('bedrooms')->default(0);
            $table->integer('bathrooms')->default(0);
            $table->string('building_area')->nullable(); // e.g. 36
            $table->string('land_area')->nullable(); // e.g. 72
            $table->text('features')->nullable(); // JSON or Text
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 3. News & Promo
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['news', 'promo']);
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        // 4. FAQs
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('clusters');
        Schema::dropIfExists('categories');
    }
};
