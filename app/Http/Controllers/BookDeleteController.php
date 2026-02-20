<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookDeleteController extends Controller
{
    public function ReturnDelete(Book $book)
    {
        abort_unless($book->user_id === auth()->id(), 403);
        return view('book_delete', compact('book'));
    }

    public function Delete(Book $book)
    {
        abort_unless($book->user_id === auth()->id(), 403);
        $book->delete();
        return redirect()->route('book');
    }
}
