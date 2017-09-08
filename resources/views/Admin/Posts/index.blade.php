@extends('template')
@section('content')
<h1>BLOG - Area Administrativa</h1>

<a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Inserir</a>
<br>
<br>

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
            <td>
                <a href="{{ route('admin.posts.edit',['id'=> $post->id]) }}" class="btn btn-default">Editar</a>   
                <a href="{{ route('admin.posts.delete',['id'=> $post->id]) }}" class="btn btn-danger">Excluir</a>   
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
{!! $posts->render() !!}

@stop
