@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Loan Details</h1>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <td>{{ $loan->id }}</td>
                </tr>
                <tr>
                    <th>Lender</th>
                    <td>{{ $loan->lender }}</td>
                </tr>
                <tr>
                    <th>Student Meat</th>
                    <td>{{ $loan->student_meat }}</td>
                </tr>
                <tr>
                    <th>Book ID</th>
                    <td>{{ $loan->id_book }}</td>
                </tr>
                <tr>
                    <th>Loan Days</th>
                    <td>{{ $loan->loan_days }}</td>
                </tr>
                <tr>
                    <th>Returned</th>
                    <td>{{ $loan->returned ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th>Date Loan</th>
                    <td>{{ $loan->date_loan }}</td>
                </tr>
                <tr>
                    <th>Returned On</th>
                    <td>{{ $loan->returned_on }}</td>
                </tr>
                <tr>
                    <th>Active</th>
                    <td>{{ $loan->active ? 'Yes' : 'No' }}</td>
                </tr>
            </table>
            <a href="{{ route('loans.index') }}" class="btn btn-secondary">Return to list</a>
        </div>
    </div>
@endsection
