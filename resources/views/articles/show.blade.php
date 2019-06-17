@extends('layout')
 
@section('content')
    <h1>{{ $article->title }}</h1>
 
    <hr/>
 
    <article>
        <div class="body">{{ $article->body }}</div>
    </article>

{{-- ログインしている時だけ表示 --}}
@if (Auth::check())
	<br/>
 
    {!! link_to(action('ArticlesController@edit', [$article->id]), '編集', ['class' => 'btn btn-primary']) !!}
	<br/>
    <br/>
 
    {!! delete_form(['articles', $article->id]) !!}
@endif


	<br/>
    {!! link_to(route('articles.index'), '一覧へ', ['class' => 'btn btn-primary']) !!}
@endsection
