<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register | NotiFyEd</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Poppins Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <!-- FontAwesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

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

    .registration-form {
      background: #ffffff;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      max-width: 420px;
      width: 100%;
    }

    .registration-form h3 {
      color: #6a00ff;
      font-weight: 600;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .form-control {
      border-radius: 50px;
      padding-left: 2.5rem;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      box-shadow: 0 0 12px rgba(106, 0, 255, 0.3);
      border-color: #6a00ff;
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
      transition: all 0.3s ease;
      border-radius: 50px;
      padding: 0.6rem 1.2rem;
      border: none;
      width: 100%;
    }

    .btn-purple:hover {
      background-color: #5800cc;
      box-shadow: 0 8px 16px rgba(106, 0, 255, 0.3);
    }

    .input-with-icon {
      position: relative;
    }

    .login-link {
      display: block;
      text-align: center;
      margin-top: 1rem;
      color: #6a00ff;
      text-decoration: none;
      font-weight: 500;
    }

    .login-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <form class="registration-form">
    <h5 class="text-center text-uppercase fw-bold mb-2" style="color: #6a00ff;">NotiFyEd</h5>
    <h3>Create Account</h3>

    <div class="mb-3 input-with-icon">
      <i class="fa fa-user form-icon"></i>
      <input type="text" class="form-control" placeholder="Enrollment No. / Username" required />
    </div>

    <div class="mb-3 input-with-icon">
      <i class="fa fa-envelope form-icon"></i>
      <input type="email" class="form-control" placeholder="Email Address" required />
    </div>

    <div class="mb-3 input-with-icon">
      <i class="fa fa-lock form-icon"></i>
      <input type="password" class="form-control" placeholder="Password" required />
    </div>

    <div class="mb-4 input-with-icon">
      <i class="fa fa-lock form-icon"></i>
      <input type="password" class="form-control" placeholder="Confirm Password" required />
    </div>

    <input type="button" class="btn btn-purple" value="Register" onclick="insert()" />

    <p class="text-center mt-3 small">Already have an account? 
        <a href="./login.php" class="text-decoration-none text-purple fw-semibold">Login</a>
    </p>

    <p class="text-center mt-3" style="font-size: 0.85rem; color: #888;">Powered by <span style="color: #6a00ff; font-weight: 600;">NotiFyEd</span></p>

  </form>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function insert() {
      alert('Registration function triggered. Backend integration goes here.');
    }
  </script>
</body>
</html>
