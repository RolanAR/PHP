<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <div>
{{--        <nav>--}}
{{--            <ul>--}}
{{--                <li><a href={{ route('adm.index') }}>Main</a></li>--}}
                <li><a href={{ route('author.index') }}>Author</a></li>
                <li><a href="{{ route('book.index') }}">Book</a></li>
{{--                <li><a href="{{ route('create.index') }}">Book</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
    </div>
    @yield('content')
</div>
</body>
</html>
