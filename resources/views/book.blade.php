@extends('layout.common')
@section('title','ログイン')
@section('description','ログイン')
@section('link')
    <link rel="stylesheet" type="text/css" href="/css/book.css" media="all">
@endsection
@section('content')
    <section>
        <form method="post" action="{{ route('book.edit') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div class="book-container">
                <img class="book-image" src="{{ $book->image_url }}" alt="Book 1">
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <textarea type="text" id="title" name="title" placeholder="タイトルを入力してください">{{ $book->title }}</textarea>
                </div>
                <div class="form-group">
                    <label for="title">URL</label>
                    <textarea type="text" id="url" name="url" placeholder="URLを入力してください">{{ $book->url }}</textarea>
                </div>
                <div class="form-group">
                    <label for="title">タグ</label>
                    <select class="form-control" id="book_type" name="book_type">
                        @foreach (config('const.book.type') as $key => $type)
                            <option value="{{ $key }}" @if($key == $book->type) selected @endif>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">ディスクリプション</label>
                    <textarea id="description" name="description" placeholder="ディスクリプションを入力してください"style="width: 800px; height: 100px;">{{ $book->caption }}</textarea>
                </div>
                <!--
                <div class="book-details">
                    <h2><a class="book-title" href="{{ $book->url }}">{{ $book->title }}</a></h2>
                    <p><a class="button-link" href="/?type={{$book->type}}">{{ config('const.book.type')[$book->type] }}</a></p>
                    <p class="book-description">{{ $book->caption }}</p>
                    <a class="book-url" href="{{ $book->url }}">Read More</a>
                </div>
                -->
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('保存') }}</x-primary-button>

                @if (session('status') === 'book-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </section>
@endsection
