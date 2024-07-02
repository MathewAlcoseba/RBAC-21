<!-- resources/views/admin/dashboard.blade.php -->

@extends('mainLayout')

@section('page-title', 'Admin Dashboard')

@section('page-content')
<h1>Admin Dashboard</h1>

<a href="{{ route('admin.user.create') }}">Create New User</a>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('admin.user.details', $user->id) }}">View Details</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
