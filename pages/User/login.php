<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | NotiFyEd</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Poppins font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <!-- FontAwesome -->
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #7f00ff, #e100ff);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 1rem;
    }

    .login-form {
      background: white;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
    }

    .login-form h3 {
      color: #6a00ff;
      font-weight: 600;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .form-control {
      border-radius: 50px;
      padding-left: 2.5rem;
    }

    .input-with-icon {
      position: relative;
    }

    .form-icon {
      position: absolute;
      top: 50%;
      left: 20px;
      transform: translateY(-50%);
      color: #6a00ff;
    }

    .btn-purple {
      background-color: #6a00ff;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 50px;
      padding: 0.6rem 1.2rem;
      width: 100%;
      transition: all 0.3s ease;
    }

    .btn-purple:hover {
      background-color: #5800cc;
      box-shadow: 0 8px 16px rgba(106, 0, 255, 0.3);
    }

    .login-link {
      display: block;
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }

    .site-name {
      color: #6a00ff;
      font-weight: 700;
      font-size: 1.2rem;
      text-align: center;
      text-transform: uppercase;
      margin-bottom: 0.5rem;
    }
  </style>
</head>
<body>

  <form class="login-form">
    <div class="site-name">NotiFyEd</div>
    <h3 class="text-center mb-4">Login</h3>

    <!-- Username -->
    <div class="mb-3 input-with-icon">
      <input
        type="text"
        class="form-control"
        id="username"
        placeholder="Enrollment No. / Username"
        required
      />
      <i class="fa fa-user form-icon"></i>
    </div>

    <!-- Password -->
    <div class="mb-4 input-with-icon">
      <input
        type="password"
        class="form-control"
        id="password"
        placeholder="Password"
        required
      />
      <i class="fa fa-lock form-icon"></i>
    </div>

    <!-- Login Button -->
    <input type="button" class="btn-purple" value="Login" onclick="login()" />

    <!-- Register Redirect -->
    <p class="text-center mt-3 small">Don't have an account? 
        <a href="./register.php" class="text-decoration-none text-purple fw-semibold">Register</a>
    </p>

    <p class="text-center mt-3" style="font-size: 0.85rem; color: #888;">Powered by <span style="color: #6a00ff; font-weight: 600;">NotiFyEd</span></p>

  </form>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function login() {
      // basic form submission or redirection logic
      alert("Login clicked");
    }
  </script>
</body>
</html>
