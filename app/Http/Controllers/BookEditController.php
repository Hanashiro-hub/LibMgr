<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookEditController extends Controller
{
    public function edit(Book $book)
    {
        abort_unless($book->user_id === auth()->id(), 403);
        return view('book_edit', compact('book'));
    }

    public function edit_put(Request $request, Book $book)
    {
        abort_unless($book->user_id === auth()->id(), 403);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'star' => 'required|integer|min:0|max:5',
        ]);

        $book->update($validated);
        return view('book');
    }
}
