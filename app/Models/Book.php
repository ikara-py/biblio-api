<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\Translation\Loader\FileLoader;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'author', 'isbn', 'published_year', 'category_id'];


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
