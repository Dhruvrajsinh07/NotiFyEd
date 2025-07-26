<?php
require_once "../includes/init.php";
include pathof('./includes/header.php');
include pathof('./includes/navbar.php');
?>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f0fa;
      padding: 2rem;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(8px);
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(106, 0, 255, 0.1);
      padding: 2rem 2rem;
      max-width: 800px;
      margin: auto;
    }

    h2 {
      color: #6a00ff;
      font-weight: 600;
      text-align: center;
      margin-bottom: 2rem;
    }

    .form-label {
      font-weight: 500;
      color: #6a00ff;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #6a00ff;
      box-shadow: 0 0 10px rgba(106, 0, 255, 0.2);
    }

    .form-select,
    .form-control[readonly] {
      background-color: #f5f0ff;
    }

    .btn-purple {
      background-color: #6a00ff;
      color: white;
      font-weight: 500;
      border-radius: 50px;
      transition: all 0.3s ease;
      padding: 0.5rem 2rem;
    }

    .btn-purple:hover {
      background-color: #5800cc;
      box-shadow: 0 6px 12px rgba(106, 0, 255, 0.2);
      transform: scale(1.03);
    }

    .back-btn {
      display: inline-block;
      color: #6a00ff;
      font-weight: 500;
      margin-bottom: 1rem;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .back-btn:hover {
      text-decoration: underline;
      color: #5800cc;
    }

    @media (max-width: 768px) {
      .form-container {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="form-container">
    <a href="./personal.php" class="back-btn"><i class="fas fa-arrow-left me-1"></i>Back to Page</a>
    <h2>📢 Post Personal Notice</h2>

    <form action="submit_personal_notice.php" method="POST">
      <!-- To Student -->
      <div class="mb-3">
        <label class="form-label">To Student</label>
        <input type="text" name="student_name" class="form-control" value="Rahul Sharma" readonly />
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="student_email" class="form-control" value="rahul@example.com" readonly />
      </div>

      <!-- Notice Title -->
      <div class="mb-3">
        <label class="form-label">Notice Title</label>
        <input type="text" name="notice_title" class="form-control" placeholder="Enter notice title" required />
      </div>

      <!-- Category -->
      <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="category" class="form-select" required>
          <option selected disabled>Select Category</option>
          <option value="Personal">Personal</option>
          <option value="General">General</option>
          <option value="Important">Important</option>
          <option value="Special">Special</option>
        </select>
      </div>

      <!-- Sender Faculty -->
      <div class="mb-3">
        <label class="form-label">Sender Faculty</label>
        <select name="faculty" class="form-select" required>
          <option selected disabled>Select Faculty</option>
          <option value="Faculty 1">Faculty 1</option>
          <option value="Faculty 2">Faculty 2</option>
          <option value="Faculty 3">Faculty 3</option>
          <option value="Faculty 4">Faculty 4</option>
          <option value="Faculty 5">Faculty 5</option>
        </select>
      </div>

      <!-- Notice Description -->
      <div class="mb-3">
        <label class="form-label">Notice Description</label>
        <textarea name="description" class="form-control" rows="4" placeholder="Write the notice here..." required></textarea>
      </div>

      <!-- Date -->
      <div class="mb-3">
        <label class="form-label">Date</label>
        <input type="date" id="dateInput" name="date" class="form-control" required />
      </div>

      <!-- Day (auto-filled) -->
      <div class="mb-4">
        <label class="form-label">Day</label>
        <input type="text" id="dayInput" name="day" class="form-control" placeholder="Auto-filled from publish date" readonly />
      </div>

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" class="btn btn-purple">Post Notice</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script to auto select day -->
  <script>
    const dateInput = document.getElementById('dateInput');
    const dayInput = document.getElementById('dayInput');

    dateInput.addEventListener('change', function () {
      const date = new Date(this.value);
      if (!isNaN(date.getTime())) {
        const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        dayInput.value = days[date.getDay()];
      } else {
        dayInput.value = '';
      }
    });
  </script>
</body>
</html>
