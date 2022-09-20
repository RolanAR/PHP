<?php

namespace App\Http\Controllers;

use App\Models\Author_id;

use App\Models\Book_id;
use Illuminate\Http\Request;

class admController extends Controller
{
    public function index()
    {
        $authors = Author_id::all();
        return view('author.index', compact('authors'));
//        foreach ($authors as $Author_id) {
//            dump($Author_id->author_name);
        }
    }
