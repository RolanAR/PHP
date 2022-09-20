@extends('layouts.adm')
@section('content')
    <div>
        <form action="{{ route('author.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <br>
            <div>
                <label for="author_name">Author's name</label>
                <input type="text" name="author_name" id="author_name" class="form-control" placeholder="author_name" value="{{$post->author_name}}">
            </div>
{{--            <div>--}}
{{--                <label for="author_id">Author's ID</label>--}}
{{--                <input type="integer" name="category_id" id="category_id" class="form-control" placeholder="author_id" value="{{$post->category_id}}">--}}
{{--            </div>--}}
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
