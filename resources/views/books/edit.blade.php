@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Edit Book</h2>
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}">
                    </div>
                    <div class="form-group">
                        <label for="autor">Author:</label>
                        <input type="text" class="form-control" id="autor" name="autor" value="{{ $book->autor }}">
                    </div>
                    <div class="form-group">
                        <label for="release">Release:</label>
                        <input type="text" class="form-control" id="release" name="release" value="{{ $book->release }}">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $book->quantity }}">
                    </div>
                    <div class="form-group">
                    <label for="active">Active</label>
                    <select class="form-control" id="active" name="active">
                        <option value="1" {{ $book->active ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$book->active ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
