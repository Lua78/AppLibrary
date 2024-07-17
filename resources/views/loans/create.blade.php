@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Create Loan</h1>
            <form action="{{ route('loans.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="lender">Student Lender</label>
                    <input type="text" class="form-control" id="lender" name="lender" required>
                </div>
                <div class="form-group">
                    <label for="student_meat">Student Meat</label>
                    <input type="text" class="form-control" id="student_meat" name="student_meat" required>
                </div>
                <div class="form-group">
                    <label for="id_book">Book</label>
                    <select name="id_book" id="id_book" class="form-control">
                    <option>Select one</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="loan_days">Loan Days</label>
                    <input type="number" class="form-control" id="loan_days" name="loan_days" required>
                </div>
                <button type="submit" class="btn btn-primary">Save Loan</button>
            </form>
        </div>
    </div>
@endsection
