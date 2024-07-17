@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center p-4">
                <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a class="btn btn-success w-100" href="{{ route('books.index') }}">Books</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary w-100" href="{{ route('users.index') }}">Users</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-success w-100" href="{{ route('loans.index') }}">Loans</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
