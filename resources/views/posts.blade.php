@extends('layout')
@section('content')
    @foreach ($posts as $post)
        {{--    getting the nth child in a loop--}}
        {{--    @dd($loop)--}}
        <article>
            <a>
                <h1>
                    <a href="/post/{{$post->slug}}">
                        {!! $post->title !!}
                    </a>
                </h1>
                <p>
                    <a href="#">{{$post->category->name}}</a>
                </p>
                <div>
                    {{$post->excerpt }}
                </div>
        </article>
    @endforeach
@endsection
