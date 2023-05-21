@extends('layout.common')
@section('title','ログイン')
@section('description','ログイン')
@section('content')
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf        
            <div class="form-group">
                <label for="user_id">id</label>
                <input type="text" id="user_id" name="user_id" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="form-group social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </form>
    </div>
@endsection
