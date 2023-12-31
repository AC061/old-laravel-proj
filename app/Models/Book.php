<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';

    public function author(){
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }
}
