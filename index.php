<?php
require_once "./includes/init.php";
include pathof('./includes/header.php');
include pathof('./includes/navbar.php');
?>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f0fa;
    }

    .text-purple {
      color: #6a00ff !important;
    }

    .main {
      padding: 2rem;
    }

    .card {
      border: none;
      border-radius: 20px;
      backdrop-filter: blur(12px);
      background: rgba(255, 255, 255, 0.5);
      box-shadow: 0 12px 30px rgba(106, 0, 255, 0.1);
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: scale(1.01);
    }

    .card-title,
    .form-label,
    h2 {
      color: #6a00ff !important;
      font-weight: 600;
    }

    .btn-purple {
      background-color: #6a00ff;
      color: white;
      font-weight: 600;
      border-radius: 50px;
      border: none;
      transition: all 0.3s;
    }

    .btn-purple:hover {
      background-color: #5800cc;
      box-shadow: 0 6px 18px rgba(106, 0, 255, 0.3);
    }

    .form-control {
      border-radius: 50px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
      border-color: #6a00ff;
      box-shadow: 0 0 8px rgba(106, 0, 255, 0.4);
    }

    .nav-card {
      background-color: #fff;
      box-shadow: 0 6px 15px rgba(106, 0, 255, 0.1);
      border-radius: 16px;
      padding: 1rem 2rem;
      margin-bottom: 1.5rem;
      transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .nav-card:hover {
      box-shadow: 0 8px 20px rgba(106, 0, 255, 0.15);
      transform: translateY(-2px);
    }

    .nav-link.text-purple {
      font-weight: 600;
      transition: all 0.3s ease;
      text-align: center;
    }

    .nav-link.text-purple:hover {
      color: #5800cc !important;
      transform: scale(1.05);
    }

    .navbar-toggler {
      border: none;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }
  </style>
</head>
<body>
  <!-- Profile Form -->
  <div class="main container">
    <h2 class="mb-4">Admin Profile</h2>

    <div class="card p-4">
      <form>
        <div class="mb-3">
          <label for="facultyName" class="form-label">Faculty Name</label>
          <input type="text" class="form-control" id="facultyName" value="Dr. Sameer Patil" />
        </div>

        <div class="mb-3">
          <label for="facultyNo" class="form-label">Faculty No</label>
          <input type="text" class="form-control" id="facultyNo" value="FCT1234" />
        </div>

        <div class="mb-3">
          <label for="designation" class="form-label">Designation</label>
          <input type="text" class="form-control" id="designation" value="Assistant Professor" />
        </div>

        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" id="subject" value="Database Management System" />
        </div>

        <div class="mb-3">
          <label for="facultyEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="facultyEmail" value="sameer.patil@college.edu" />
        </div>

        <button type="submit" class="btn btn-purple">Update Profile</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
