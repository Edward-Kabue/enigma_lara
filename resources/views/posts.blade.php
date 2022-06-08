<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
<title>My blog</title>
<link rel="stylesheet" href="/app.css">
<body>
@foreach ($posts as $post)
    {{--    getting the nth child in a loop--}}
    {{--    @dd($loop)--}}
    <article>
        <a>
            <h1>
                <a href="/post/{{$post->slug}}">
                    {{$post->title}}
                </a>
            </h1>
            <div>
                {{$post->excerpt }}
            </div>
    </article>
@endforeach
</body>
</html>
