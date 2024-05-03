<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {   
        $books = Book::all();
        return view('books.list', compact('books'));
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('books');
    }
}
