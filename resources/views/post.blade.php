<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>My blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<article>
    {{--    //escape the html --}}
    <h1>{!! $post->title !!}</h1>
    <div>
        {!! $post->body  !!}
    </div>
</article>
<a href="/">go back</a>
</body>
</html>
