@extends('layouts.adm')
@section('content')
    <div>
        <br>
        <div>{{$post->id}}. {{ $post->author_name }} - {{'Authors ID' }}. {{ $post->category_id}}</div>
        <div>{{ 'вывести список книг автора через forentK в похожем цикле' }}</div>
{{--        @foreach($authors as $author)--}}
{{--            <div> </div>--}}
{{--            <div><a href="{{ route('author.show', $author->id) }}">{{$author->id}}. {{ $author->author_name }}</a></div>--}}
{{--        @endforeach--}}
    </div>
    <br>
    <div>
        <a href="{{route('author.edit', $post->id)}}">Edit</a>
    </div>
    <div>
        <form action="{{route('author.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </div>
    <br>
    <div>
        <a href="{{route('author.index')}}">Back</a>
    </div>
@endsection
