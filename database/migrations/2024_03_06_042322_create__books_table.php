<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\Category;
use app\Models\Bookshelf;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_books', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class,"category_id");
            $table->foreignIdFor(Bookshelf::class,"bookshelf_id");
            $table->String("cover", 255)->nullable();
            $table->String("ISBN", 15)->unique;
            $table->String("title", 255);
            $table->longText("description");
            $table->String("publisher", 255);
            $table->Date("public_year");
            $table->String("author", 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_books');
    }
};
