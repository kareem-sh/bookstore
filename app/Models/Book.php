<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     /** @use HasFactory<\Database\Factories\AuthorFactory> */
     use HasFactory;

     protected $fillable = [
      'name',
      'category_id',
      'publisher_id',
      'description',
      'number_of_copies',
      'number_of_pages',
      'price',
      'isbn',
      'cover_image',


  ];

     public function category(){
        return $this->belongsTo(Category::class);
     }

     public function publisher(){
        return $this->belongsTo(Publisher::class);
     }

     public function authors(){
        return $this->belongsToMany(Author::class,'book_author');
     }
}
