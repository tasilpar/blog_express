@extends('template')
@section('content')
<h1>Criação de novo POST</h1>
 {!! Form::open(['route'=>'admin.posts.store', 'method' => 'post']) !!}
 {!! Form::close()  !!}
 <div class="form-group">
     {!! Form::label('title', 'Titulo:') !!}
     {!! Form::text('title', null, ['class' => 'form-control']) !!}
 </div>    
 <div class="form-group">
     {!! Form::label('content', 'Conteudo:') !!}
     {!! Form::textArea('content', null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
     {!! Form::submit('Inserir', ['class'=>'btn btn-primary']) !!}
 </div>
 
 
@stop
