@extends('layout')
 
@section('content')
    <h1>Edit: {{ $article->title }}</h1>
 
    <hr/>

<?php
/* 
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
*/
?>
	@include('errors.form_errors')
 
    {!! Form::model($article, ['method' => 'PATCH', 'url' => ['articles', $article->id]]) !!}

<?php
/*
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at', 'Publish On:') !!}
        {!! Form::input('date', 'published_at', $article->published_at->format('Y-m-d'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>
*/
?>
	@include('articles._form', ['published_at' => $article->published_at->format('Y-m-d'), 'submitButton' => 'Edit Article'])

    {!! Form::close() !!}
 
@stop
