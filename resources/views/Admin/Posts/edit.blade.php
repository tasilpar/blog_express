@extends('template')
@section('content')
<h1>Edição do POST - {{ $post->title }}</h1>
@if($errors->any())
<ul clas="alert">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    
    @endforeach
</ul>

@endif
 {!! Form::model($post,['route'=>['admin.posts.update',$post->id], 'method' => 'put']) !!}

@include('Admin.Posts._form')
<div class="form-group">
     {!! Form::label('tags', 'Tags:') !!}
     {!! Form::textArea('tags', $post->tagsList, ['class' => 'form-control']) !!}
</div>
 <div class="form-group">
     {!! Form::submit('Alterar', ['class'=>'btn btn-primary']) !!}
 </div>
  {!! Form::close()  !!}
 
@stop
