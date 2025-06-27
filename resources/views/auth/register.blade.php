{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Shoppiko</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <a href="{{ url('/') }}" class="back-home-fixed"><i class="fa-solid fa-house"></i> Home</a>

  <form method="POST" action="{{ route('register') }}" class="login-box">
    @csrf

    <h2>Create Account ✨</h2>

    <p class="subtext subtext-small">Join Shoppiko — it only takes a minute to get started!</p>

    <!-- Name -->
    <div class="form-group">
      <label for="name">Full Name</label>
      <input
        id="name"
        type="text"
        name="name"
        value="{{ old('name') }}"
        required
        autofocus
        autocomplete="name"
      />
      @error('name')
        <div class="input-error">{{ $message }}</div>
      @enderror
    </div>

    <!-- Email -->
    <div class="form-group">
      <label for="email">Email</label>
      <input
        id="email"
        type="email"
        name="email"
        value="{{ old('email') }}"
        required
        autocomplete="email"
      />
      @error('email')
        <div class="input-error">{{ $message }}</div>
      @enderror
    </div>

    <!-- Password -->
    <div class="form-group password-group">
      <label for="password">Password</label>
      <div class="password-wrapper">
        <input
          id="password"
          type="password"
          name="password"
          required
          autocomplete="new-password"
        />
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
        <input
          id="password_confirmation"
          type="password"
          name="password_confirmation"
          required
          autocomplete="new-password"
        />
        <button type="button" class="toggle-password" onclick="togglePassword('password_confirmation', this)">🔓</button>
      </div>
    </div>

    <!-- Register Button -->
    <button type="submit" class="login-btn">Register</button>

    <!-- Link to Login -->
    <div class="login-footer">
      <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
  </form>

  <script>
    function togglePassword(fieldId, btn) {
      const input = document.getElementById(fieldId);
      if (input.type === "password") {
        input.type = "text";
        btn.textContent = "🔒";
      } else {
        input.type = "password";
        btn.textContent = "🔓";
      }
    }
  </script>
</body>
</html>
