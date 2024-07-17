@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Loans List</h1>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
            <a href="{{ route('loans.create') }}" class="btn btn-success">Create Loan</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Lender</th>
                        <th>Student Meat</th>
                        <th>Book</th>
                        <th>Loan Days</th>
                        <th>Returned</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loans as $loan)
                        <tr>
                            <td>{{ $loan->lender }}</td>
                            <td>{{ $loan->student_meat }}</td>
                            <td>{{ $loan->book->name }}</td>
                            <td>{{ $loan->loan_days }}</td>
                            <td>{{ $loan->returned ? 'Yes' : 'No' }}</td>
                            <td>{{ $loan->active ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="{{ route('loans.show', $loan->id) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('loans.edit', $loan->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('loans.destroy', $loan->id) }}" method="POST" style="display: inline-block;">
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
@endsection
