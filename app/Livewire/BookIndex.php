<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Book;

class BookIndex extends Component
{
    use WithPagination;

    public string $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Book::query();
        $query->where('user_id', auth()->id()); //user_idがログインユーザの値と一致しているものだけ取得

        if($this->search !== ''){

            $query->where(function($query){
                $query->where('title', 'like', '%'.$this->search.'%');
            });

        }

        $books = $query->latest()->paginate(10);

        return view('livewire.book-index', [
            'books' => $books,
        ]);
    }
}