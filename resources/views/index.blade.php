@extends('layout.common')
@section('title','ログイン')
@section('description','ログイン')
@section('link')
    <link rel="stylesheet" type="text/css" href="/css/book.css" media="all">
@endsection
@section('content')
    @foreach ($books as $book)
    <div class="book-card">
        <img class="book-image" src="{{ $book->image_url }}" alt="Book 1">
        <div class="book-details">
            <h2 class="book-title">{{ $book->title }}</h2>
            <p class="book-author">{{ config('const.book.type')[$book->type] }}</p>
            <p class="book-description">{{ $book->caption }}</p>
            <a class="book-url" href="{{ $book->url }}">Read More</a>
        </div>
    </div>
    @endforeach
@endsection