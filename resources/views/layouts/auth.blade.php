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
<a href="{{ url('/') }}" class="back-home-fixed"><i class="fa-solid fa-house"></i> ⬅️ Back to Home</a>

<style>
.back-home-btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 15px;
    font-weight: 600;
    color: #333;
    background-color: #f3f4f6;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.back-home-btn:hover {
    background-color: #e5e7eb;
    color: #000;
    transform: translateY(-2px);
}
</style>




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
