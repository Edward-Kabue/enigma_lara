@extends('layout')
@section('content')
    <article>
        {{--    //escape the html --}}
        <h1>{!! $post->title !!}</h1>
        <p>
            by <a href="/authors/{{ $post->author->username }}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
        <div>
            {!! $post->body  !!}
        </div>
    </article>
    <a href="/">go back</a>
@endsection

