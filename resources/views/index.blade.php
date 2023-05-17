@extends('layout.common')
@section('title','ログイン')
@section('description','ログイン')
@section('content')
    @if(auth())
        ユーザーは認証されています。
    @endif
@endsection