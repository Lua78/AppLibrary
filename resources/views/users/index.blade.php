@extends('layouts.app')

@section('content')
</ul>
<div class="row">
    <div class="col-md-12">
        <h1>Users List</h1>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
        <a href="{{ route('users.create') }}" class="btn btn-success">Create User</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->active }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
