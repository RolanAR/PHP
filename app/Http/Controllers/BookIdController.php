<?php

namespace App\Http\Controllers;

use App\Models\Author_id;
use App\Models\Book_id;

use Illuminate\Http\Request;

class BookIdController extends Controller
{
    public function index()
    {
        $books = Book_id::all();
        return view('book.index', compact('books'));
//        $author = Author_id::where('category_id', 1)->get();
//        foreach ($books as $Book_id) {
//            dump($Book_id->book_name);
        }
//        $books = Book_id::read('author_name')->get();
//        foreach ($books as $book_ids) {
//            dump($book_ids->book_name);
//        }
//        dd('end');
//    }

    public function create()
    {
        return view('book.create');
    }

    public function store()
    {
        $data = request()->validate([
            'book_name' => 'string',
            'category' => 'integer',
        ]);
//        dd($data);
        Book_id::create($data);
        return redirect()->route('book.index');
    }

    public function show(Book_id $post)
    {
//        dd($id);
//        $post = Book_id::findOrFail($id);
//        dd($post->book_name);
        return view('book.show', compact('post'));

    }
    public function edit(Book_id $post)
    {
//        dd($post->book_name);
        return view('book.edit', compact('post'));

    }
    public function update(Book_id $post)
    {
        $data = request()->validate([
            'book_name' => 'string',
            'category' => 'integer',
        ]);
        $post->update($data);
        return redirect()->route('book.show', $post->id);

//        $book = Book_id::find(6);
//        $book->update([
//            'book_name' => '1Bug Luna',
//        ]);
//
//        dd('update');
    }

    public function delete()
    {
        $book = Book_id::find(6);
        $book->delete();
        dd('delete');
    }

    public function destroy(Book_id $post)
    {
        $post->delete();
        return redirect()->route('book.index');
    }
}
