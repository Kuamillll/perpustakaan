<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function book(){
        return $this->belongsTo(Book::class, "category_id","id");
    }
    public function bookshelf(){
        return $this->belongsTo(Bookshelf::class, "bookshelf_id","id");
    }
}
