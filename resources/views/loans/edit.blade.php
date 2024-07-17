@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Edit Loan</h1>
            <form action="{{ route('loans.update', $loan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="lender">Lender</label>
                    <input type="text" class="form-control" id="lender" name="lender" value="{{ $loan->lender }}" required>
                </div>
                <div class="form-group">
                    <label for="student_meat">Student Meat</label>
                    <input type="text" class="form-control" id="student_meat" name="student_meat" value="{{ $loan->student_meat }}" required>
                </div>
                <div class="form-group">
                    <label for="id_book">Book ID</label>
                    <input type="number" class="form-control" id="id_book" name="id_book" value="{{ $loan->id_book }}" required>
                </div>
                <div class="form-group">
                    <label for="loan_days">Loan Days</label>
                    <input type="number" class="form-control" id="loan_days" name="loan_days" value="{{ $loan->loan_days }}" required>
                </div>
                <div class="form-group">
                    <label for="returned">Returned</label>
                    <select class="form-control" id="returned" name="returned">
                        <option value="1" {{ $loan->returned ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$loan->returned ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="active">Active</label>
                    <select class="form-control" id="active" name="active">
                        <option value="1" {{ $loan->active ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$loan->active ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Loan</button>
            </form>
        </div>
    </div>
@endsection
