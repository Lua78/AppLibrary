@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Books List</h2>
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
                <a href="{{ route('books.create') }}" class="btn btn-success">Add New Book</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Release</th>
                            <th>Quantity</th>
                            <th>Active</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->autor }}</td>
                                <td>{{ $book->release }}</td>
                                <td>{{ $book->quantity }}</td>
                                <td>{{ $book->active ? 'Yes' : 'No' }}</td>
                                <td>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
