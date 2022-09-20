@extends('layouts.adm')
@section('content')
    <div>
        <br>
        <div>{{$post->id}}. {{ $post->book_name }} - {{'Authors ID:- '}}{{ $post->category}}</div>
        <div>{{ 'вывести имя автора' }}</div>
    </div>
    <br>
    <div>
        <a href="{{route('book.edit', $post->id)}}">Edit</a>
    </div>
    <div>
        <div>
            <form action="{{route('book.delete', $post->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
    </div>
        <br>
    <div>
        <a href="{{route('book.index')}}">Back</a>
    </div>
@endsection
