@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Login</h1>

    <form method="post" action="{{ route('users.login') }}">
        @csrf

        <div class="form-group">
            <label for="email">
                <i class="fas fa-envelope"></i> Email:
            </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">
                <i class="fas fa-lock"></i> Password:
            </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fas fa-sign-in-alt"></i> Login
        </button>
    </form>
</div>
@endsection