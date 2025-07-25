<?php
require_once "../includes/init.php";
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

    .form-wrapper {
      max-width: 800px;
      margin: auto;
      padding: 2rem;
    }

    .form-card {
      border: none;
      border-radius: 20px;
      backdrop-filter: blur(12px);
      background: rgba(255, 255, 255, 0.5);
      box-shadow: 0 12px 30px rgba(106, 0, 255, 0.1);
      padding: 2rem;
      transition: all 0.3s ease;
    }

    .form-card:hover {
      transform: scale(1.01);
    }

    .form-label,
    .form-title {
      color: #6a00ff;
      font-weight: 600;
    }

    .form-control,
    .form-select,
    textarea {
      border-radius: 50px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus,
    textarea:focus {
      border-color: #6a00ff;
      box-shadow: 0 0 8px rgba(106, 0, 255, 0.4);
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

    select.form-select option {
      padding: 10px;
    }

    textarea.form-control {
      border-radius: 20px;
    }
  </style>
</head>
<body>

  <!-- Optional Header -->
  <div class="text-center py-3" style="font-size: 1.8rem; font-weight: 700; color: #6a00ff;">
    Custom Form - NotiFyEd
  </div>

  <!-- Form Layout -->
  <div class="form-wrapper">
    <div class="form-card">
      <h4 class="form-title mb-4">Submit Request / Info</h4>
      <form action="submit_form.php" method="POST">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" required>
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select name="category" id="category" class="form-select" required>
            <option value="">Select category</option>
            <option value="General">General</option>
            <option value="Request">Request</option>
            <option value="Feedback">Feedback</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" class="form-control" rows="5" placeholder="Write here..." required></textarea>
        </div>

        <div class="mb-3">
          <label for="submittedBy" class="form-label">Submitted By</label>
          <input type="text" name="submitted_by" id="submittedBy" class="form-control" placeholder="Your name or ID" required>
        </div>

        <div class="mb-3">
          <label for="date" class="form-label">Date</label>
          <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-purple w-100">Submit</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
