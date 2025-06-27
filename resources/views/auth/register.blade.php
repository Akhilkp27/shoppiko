@extends('layouts.auth')
@section('content')
    <form method="POST" action="{{ route('register') }}" class="login-box">
        @csrf

        <h2>Create Account ✨</h2>

        <p class="subtext subtext-small">Join Shoppiko — it only takes a minute to get started!</p>

        <!-- Name -->
        <div class="form-group">
            <label for="name">Full Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                autocomplete="name" />
            @error('name')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
            @error('email')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group password-group">
            <label for="password">Password</label>
            <div class="password-wrapper">
                <input id="password" type="password" name="password" required autocomplete="new-password" />
                <button type="button" class="toggle-password" onclick="togglePassword('password', this)">🔓</button>
            </div>
            @error('password')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-group password-group">
            <label for="password_confirmation">Confirm Password</label>
            <div class="password-wrapper">
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password" />
                <button type="button" class="toggle-password"
                    onclick="togglePassword('password_confirmation', this)">🔓</button>
            </div>
        </div>

        <!-- Register Button -->
        <button type="submit" class="login-btn">Register</button>

        <!-- Link to Login -->
        <div class="login-footer">
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </form>
@endsection
