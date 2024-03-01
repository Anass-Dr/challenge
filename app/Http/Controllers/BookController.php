<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function show()
    {
        return view('book.create');
    }

    public function create(Request $request)
    {
        Book::create([
            "title" => $request->title,
            "price" => $request->price,
        ]);

        return redirect('/');
    }
}
