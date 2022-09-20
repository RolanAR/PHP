@extends('layouts.adm')
@section('content')
    <div>
        <form action="{{ route('author.store') }}" method="post">
            @csrf
            <br>
            <div>
                <label for="author_name">Author's name</label>
                <input type="text" name="author_name" id="author_name" class="form-control" placeholder="author_name">
            </div>
{{--            <div>--}}
{{--                <label for="author_id">Author's Id</label>--}}
{{--                <input type="integer" name="category_id" id="category_id" class="form-control" placeholder="author_id">--}}
{{--            </div>--}}
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
