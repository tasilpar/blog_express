@extends('template')
@section('content')
<h1>Criação de novo POST</h1>
@if($errors->any())
<ul clas="alert">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    
    @endforeach
</ul>

@endif
 {!! Form::open(['route'=>'admin.posts.store', 'method' => 'post']) !!}

@include('Admin.Posts._form')
<div class="form-group">
     {!! Form::label('tags', 'Tags:') !!}
     {!! Form::textArea('tags', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
     {!! Form::submit('Inserir', ['class'=>'btn btn-primary']) !!}
</div>


  {!! Form::close()  !!}
 
@stop
