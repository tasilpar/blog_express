@extends('template')
@section('content')
<h1>BLOG</h1>
<ul>
    @foreach($posts as $post)
        <li><h2> {{ $post->title }}</h2>
        <p> {{ $post->content }}</p></li>
        <b>TAGS</b>
        <ul>
            @foreach($post->tags as $tag)
            <li>{{ $tag->name }}</li>
            @endforeach
        </ul>

        <h3>Comentários</h3>        
        @foreach($post->comments as $comment)
        <b>Name:</b> {{ $comment->name}}<br>
        <b>Comment:</b> {{ $comment->comment}}<br>
        @endforeach    
    @endforeach
    <hr>
</ul>

@stop
