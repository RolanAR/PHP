@extends('layouts.adm')
@section('content')
    <div>
        <br>
        <a href="{{ route('book.create') }}">Add Book with Author ID</a>
    </div>
    <div>
        <br>
        @foreach($books as $book)
            <div><a href="{{ route('book.show', $book->id) }}">{{ $book->id }}. {{ $book->book_name }}</a></div>
        @endforeach
    </div>
@endsection
