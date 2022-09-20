@extends('layouts.adm')
@section('content')
    <div>
        <br>
        <div>
            <a href="{{ route('author.create') }}">Add Author with Autors ID</a>
        </div>
        <br>
        @foreach($authors as $author)
            <div> </div>
            <div><a href="{{ route('author.show', $author->id) }}">{{$author->id}}. {{ $author->author_name }}</a></div>
        @endforeach
    </div>
@endsection
