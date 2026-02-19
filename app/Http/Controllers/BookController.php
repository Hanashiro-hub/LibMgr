<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'star' => 'required|integer|min:0|max:5',
        ]);

        Book::create([
            ...$validated,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('book');
    }
}
