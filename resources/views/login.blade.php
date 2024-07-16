<!-- resources/views/login.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="container">
    <div class="image"></div>
    <div class="login-form">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="username" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
@endsection
