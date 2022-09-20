<?php

namespace App\Http\Controllers;

use App\Models\Author_id;

use App\Models\Book_id;
use Illuminate\Http\Request;

class AuthorIdController extends Controller
{
    public function index()
    {
        $authors = Author_id::all();
        return view('author.index', compact('authors'));
//        foreach ($authors as $Author_id) {
//            dump($Author_id->author_name);
//        }
    }

    public function create()
    {
        return view('author.create');
    }

    public function store()
    {
        $data = request()->validate([
            'author_name' => 'string',
//            'category_id' => 'integer',
        ]);
//        dd($data);
        Author_id::create($data);
        return redirect()->route('adm.index');
    }

    public function show(Author_id $post)
    {
//        dd($id);
//        $post = Author_id::findOrFail($id);
//        dd($post->author_name);
        return view('author.show', compact('post'));
    }

    public function edit(Author_id $post)
    {
//        $data = request()->validate([
//            'author_name' => 'string',
//            'category_id' => 'integer',
//        ]);
//        dd($data);

//        dd($post->author_name);
//        dd($post->author_name);
        return view('author.edit', compact('post'));
    }

    public function update(Author_id $post)
    {
        $data = request()->validate([
        'author_name' => 'string',
//        'category_id' => 'integer',
        ]);
        $post->update($data);
        return redirect()->route('author.show', $post->id);
//        Author_id::create($data);

//        dd(111113434);
//        $author = Author_id::find(1);
//        $author->update([
//            'author_name' => '!Rolan',
//        ]);
//        dd('update');
    }

    public function delete()
    {
        $author = Author_id::find(2);
        $author->delete();
        dd('delete');
    }

    public function destroy(Author_id $post)
    {
        $post->delete();
        return redirect()->route('author.index');
    }
}
