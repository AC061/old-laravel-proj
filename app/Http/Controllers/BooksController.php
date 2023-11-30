<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
   public function getBooks(Request $request){
        return Book::with('author','publisher')->get();
   } //
}
