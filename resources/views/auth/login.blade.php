@extends('layouts.auth')
@section('content')
    <!-- Session Status -->
    @if (session('status'))
        <div class="session-status">
            {{ session('status') }}
        </div>
    @endif

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}" class="login-box">
        @csrf

        <h2>Welcome Back 👋</h2>

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                autocomplete="username" />
            @error('email')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group password-group">
            <label for="password">Password</label>
            <div class="password-wrapper">
                <input id="password" type="password" name="password" required autocomplete="current-password" />
                <button type="button" class="toggle-password" onclick="togglePassword()">
                    🔓
                </button>
            </div>
            @error('password')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-group remember-me">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember" />
                <span>Remember me</span>
            </label>
        </div>

        <!-- Forgot Password -->
        @if (Route::has('password.request'))
            <div class="form-group forgot-password text-right">
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            </div>
        @endif

        <!-- Submit Button -->
        <button type="submit" class="login-btn">Login</button>

        <!-- Divider -->
        <div class="divider"><span>or continue with</span></div>

        <!-- Social Login -->
        <div class="social-login">
            <button type="button" class="social-btn google-btn">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg"
                    alt="Google Icon" />
                Continue with Google
            </button>
        </div>

        <!-- Register Link -->
        <div class="login-footer">
            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </form>
@endsection
