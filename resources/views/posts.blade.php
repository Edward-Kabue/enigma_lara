@extends('layout')
@section('content')
    @foreach ($posts as $post)
        {{--    getting the nth child in a loop--}}
        {{--    @dd($loop)--}}
        <article>
            <a>
                <h1>
                    <a href="/post/{{$post->id}}">
                        {{$post->title}}
                    </a>
                </h1>
                <div>
                    {{$post->excerpt }}
                </div>
        </article>
    @endforeach
@endsection
