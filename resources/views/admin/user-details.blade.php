<!-- resources/views/admin/user-details.blade.php -->

@extends('mainLayout')

@section('page-title', 'User Details')

@section('page-content')
<h1>User Details</h1>

<p><strong>Name:</strong> {{ $user->name }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>
<p><strong>Job:</strong> 
    @foreach($user->roles as $role)
        {{ $role->name }}
    @endforeach
</p>

<a href="{{ route('dash') }}">Back to Dashboard</a>
@endsection
