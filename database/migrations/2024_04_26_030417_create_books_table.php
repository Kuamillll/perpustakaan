<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Bookshelf;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class,"category_id");
            $table->foreignIdFor(Bookshelf::class,"bookshelf_id");
            $table->String("cover", 255)->nullable();
            $table->String("isbn", 15)->unique;
            $table->String("title", 255);
            $table->longText("description");
            $table->String("publisher", 255);
            $table->Integer("public_year");
            $table->String("author", 255);
            $table->String("page", 255);
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
