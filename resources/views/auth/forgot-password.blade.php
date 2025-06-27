@extends('layouts.auth')
@section('content')
    <!-- Session Status -->
    @if (session('status'))
        <div class="session-status">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}" class="login-box">
        @csrf

        <h2>Forgot Password 🔐</h2>

        <p class="subtext">Forgot your password? No problem. Just let us know your email address and we will email you a
            password reset link that will allow you to choose a new one.</p>

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                autocomplete="email" />
            @error('email')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Success Message -->
        @if (session('status'))
            <div class="session-status">
                {{ session('status') }}
            </div>
        @endif

        <!-- Submit -->
        <button type="submit" class="login-btn">Send Reset Link</button>

        <!-- Back to login -->
        <div class="login-footer">
            <p>Remembered your password? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </form>
@endsection
