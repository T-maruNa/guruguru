@extends('layout.common')
@section('title','ログイン')
@section('description','ログイン')
@section('link')
    <link rel="stylesheet" type="text/css" href="/css/book.css" media="all">
@endsection
@section('content')
    <div class="nav-header">
        <nav class="navbar">
            <div class="logo">
            <a href="index.html">ロゴ</a>
            </div>
            <form class="search-form" action="#" method="GET">
            <input type="text" name="search" placeholder="検索">
            <button type="submit">検索</button>
            </form>
            <ul class="nav-menu">
                @auth
                    <li><a href="/logout">ログアウト</a></li>
                @endauth
                @guest
                    <li><a href="/login">ログイン</a></li>
                @endguest
            </ul>
        </nav>
    </div>
    <div class="tag-list">
        @foreach(config('const.book.type') as $key => $type)
            <a href="/?type={{ $key }}">{{ $type }}</a>
        @endforeach
    </div>

    @foreach ($books as $book)
    <div class="book-card">
        <img class="book-image" src="{{ $book->image_url }}" alt="Book 1">
        <div class="book-details">
            <h2><a class="book-title" href="{{ $book->url }}">{{ $book->title }}</a></h2>
            <p><a class="button-link" href="/?type={{$book->type}}">{{ config('const.book.type')[$book->type] }}</a></p>
            <p class="book-description">{{ $book->caption }}</p>
            <a class="book-url" href="{{ $book->url }}">Read More</a>
        </div>
    </div>
    @endforeach
    <div class="pagination">
        {{ $books->links('layout.pagination.custom') }}
    </div>
@endsection