@extends('layout.app')
@section('content')
    <h1>Edit</h1>
    <br>
   
    {{ Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title,['class' => 'form-control', 'placeholder' => 'Title' ])}}
        
    </div>
     <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body,['id'=> 'article-ckeditor' ,'class' => 'form-control', 'placeholder' => 'Body' ])}}
        
    </div>
     <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}}
    <br>
{{ Form::close() }}
@endsection