<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BeLongsTo;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    public function bookshelf(){
        return $this->belongsTo(Bookshelf::class, "bookshelf_id", "id");
    }
}
