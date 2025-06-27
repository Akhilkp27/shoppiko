{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password - Shoppiko</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<a href="{{ url('/') }}" class="back-home-fixed"><i class="fa-solid fa-house"></i> Home</a>

 <!-- Session Status -->
  @if (session('status'))
    <div class="session-status">
      {{ session('status') }}
    </div>
  @endif
  <form method="POST" action="{{ route('password.email') }}" class="login-box">
    @csrf

    <h2>Forgot Password 🔐</h2>

    <p class="subtext">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

    <!-- Email Address -->
    <div class="form-group">
      <label for="email">Email</label>
      <input
        id="email"
        type="email"
        name="email"
        value="{{ old('email') }}"
        required
        autofocus
        autocomplete="email"
      />
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

</body>
</html>
