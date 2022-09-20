@extends('layouts.adm')
@section('content')
    <div>
        <form action="{{ route('book.store') }}" method="post">
            @csrf
            <br>
            <div>
                <label for="book_name">Name of the book</label>
                <input type="text" name="book_name" id="book_name" class="form-control" placeholder="book_name">
            </div>
            <div>
                <label for="book_id">Author's Id</label>
                <input type="integer" name="category" id="category" class="form-control" placeholder="author_id">
            </div>
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
