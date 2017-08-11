@extends('template')
@section('content')
<h1>BLOG - Area Administrativa</h1>



<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>AÇÃO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id }}</td>            
            <td>{{$post->title }}</td> 
            <td></td>
        </tr>
        @endforeach
        
    </tbody>
</table>
{!! $posts->render() !!}

@stop
