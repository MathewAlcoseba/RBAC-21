<!-- resources/views/admin/create-user.blade.php -->

@extends('mainLayout')

@section('page-title', 'Create New User')

@section('page-content')
<h1>Create New User</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('admin.user.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Create User</button>
</form>

<a href="{{ route('dash') }}">Back to Dashboard</a>
@endsection
