<?php 
require_once "../includes/init.php";
include '../includes/header.php';
include '../includes/navbar.php'; ?>

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

    .form-control,
    .form-select {
      border-radius: 20px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #6a00ff;
      box-shadow: 0 0 8px rgba(106, 0, 255, 0.4);
    }

    select.form-select {
      background-color: #fefbff;
      color: #333;
    }

    select.form-select option {
      padding: 8px;
    }
  </style>
</head>
<body>

  <div class="main container">
    <h2 class="mb-4">Post a New Notice</h2>
    <div class="card p-4">
      <form>
        <div class="mb-3">
          <label for="noticeTitle" class="form-label">Notice Title</label>
          <input type="text" class="form-control" id="noticeTitle" placeholder="Enter notice title" required>
        </div>

        <div class="mb-3">
          <label for="noticeCategory" class="form-label">Category</label>
          <select class="form-select" id="noticeCategory" required>
            <option value="">Select category</option>
            <option value="Exams">Exams</option>
            <option value="Events">Events</option>
            <option value="Holidays">Holidays</option>
            <option value="Suspend">Suspend</option>
            <option value="Timetable Changes">Timetable Changes</option>
            <option value="Fees">Fees</option>
            <option value="Assignment">Assignment</option>
            <option value="Result Announcement">Result Announcement</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="noticeDay" class="form-label">Day</label>
          <input type="text" class="form-control" id="noticeDay" placeholder="Auto-filled from publish date" readonly>
        </div>

        <div class="mb-3">
          <label for="facultyName" class="form-label">Sender (Faculty)</label>
          <select class="form-select" id="facultyName" required>
            <option value="">Select Faculty</option>
            <option value="Faculty 1">Faculty 1</option>
            <option value="Faculty 2">Faculty 2</option>
            <option value="Faculty 3">Faculty 3</option>
            <option value="Faculty 4">Faculty 4</option>
            <option value="Faculty 5">Faculty 5</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="targetClass" class="form-label">Target Class</label>
          <select class="form-select" id="targetClass" required>
            <option value="All" selected>All</option>
            <option value="FY-A">FY-A</option>
            <option value="FY-B">FY-B</option>
            <option value="FY-C">FY-C</option>
            <option value="FY-D">FY-D</option>
            <option value="SY-A">SY-A</option>
            <option value="SY-B">SY-B</option>
            <option value="SY-C">SY-C</option>
            <option value="SY-D">SY-D</option>
            <option value="TY-A">TY-A</option>
            <option value="TY-B">TY-B</option>
            <option value="TY-C">TY-C</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="noticeBody" class="form-label">Notice Content</label>
          <textarea class="form-control" id="noticeBody" rows="5" placeholder="Write notice details here..." required></textarea>
        </div>

        <div class="mb-3">
          <label for="publishDate" class="form-label">Schedule Publish Date</label>
          <input type="date" class="form-control" id="publishDate">
        </div>

        <button type="submit" class="btn btn-purple">Post Notice</button>
      </form>
    </div>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const publishDate = document.getElementById("publishDate");
      const noticeDay = document.getElementById("noticeDay");

      publishDate.addEventListener("change", function () {
        const date = new Date(this.value);
        const options = { weekday: 'long' };
        if (!isNaN(date)) {
          noticeDay.value = date.toLocaleDateString('en-US', options);
        }
      });
    });
  </script>
</body>
</html>