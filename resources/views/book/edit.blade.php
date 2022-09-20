@extends('layouts.adm')
@section('content')
    <div>
        <form action="{{ route('book.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <br>
            <div>
                <label for="book_name">Name of the book</label>
                <input type="text" name="book_name" id="book_name" class="form-control" placeholder="book_name" value="{{$post->book_name}}">
            </div>
            <div>
                <label for="book_id">Author's ID</label>
                <input type="integer" name="category" id="category" class="form-control" placeholder="author_id" value="{{$post->category}}">
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
