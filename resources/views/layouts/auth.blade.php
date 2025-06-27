<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shoppiko Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<a href="{{ url('/') }}" class="back-home-fixed"><i class="fa-solid fa-house"></i> Home</a>



  @yield('content')

  <script>
  function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleBtn = event.currentTarget;

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleBtn.textContent = "🔒";
    } else {
      passwordInput.type = "password";
      toggleBtn.textContent = "🔓";
    }
  }
</script>
</body>
</html>
