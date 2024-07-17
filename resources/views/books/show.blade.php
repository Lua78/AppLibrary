@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>View Book</h2>
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
                </div>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $book->name }}</td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td>{{ $book->autor }}</td>
                    </tr>
                    <tr>
                        <th>Release</th>
                        <td>{{ $book->release }}</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>{{ $book->quantity }}</td>
                    </tr>
                    <tr>
                        <th>Active</th>
                        <td>{{ $book->active ? 'Yes' : 'No' }}</td>
                    </tr>
                </table>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Return to list</a>
            </div>
        </div>
    </div>
@endsection
