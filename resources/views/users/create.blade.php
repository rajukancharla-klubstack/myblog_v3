@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="color: #28a745;">Create User</h1>

    <form id="user-create-form" action="{{ route('users.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name" style="color: #007bff;">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email" style="color: #007bff;">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password" style="color: #007bff;">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;">
            Create User
        </button>
    </form>
</div>
@endsection