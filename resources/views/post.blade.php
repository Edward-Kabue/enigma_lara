@extends('layout')
@section('content')
    <article>
        {{--    //escape the html --}}
        <h1>{!! $post->title !!}</h1>
        <p>
            <a href="#">{{$post->category->name}}</a>
        </p>
        <div>
            {!! $post->body  !!}
        </div>
    </article>
    <a href="/">go back</a>
@endsection
