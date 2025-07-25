<?php 
require_once "../includes/init.php";
include '../includes/header.php';
include '../includes/navbar.php'; ?>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f0fa;
      padding: 2rem;
    }

    .text-purple {
      color: #6a00ff !important;
    }

    .main {
      max-width: 900px;
      margin: auto;
    }

    .notice-block {
      background: rgba(255, 255, 255, 0.55);
      backdrop-filter: blur(10px);
      border-radius: 18px;
      box-shadow: 0 12px 30px rgba(106, 0, 255, 0.1);
      padding: 2rem;
      margin-bottom: 2rem;
      transition: all 0.3s ease;
    }

    .notice-block:hover {
      transform: scale(1.01);
    }

    .notice-title {
      font-size: 1.25rem;
      font-weight: 600;
      color: #6a00ff;
      margin-bottom: 1.5rem;
      border-left: 5px solid #6a00ff;
      padding-left: 1rem;
    }

    .form-label {
      font-weight: 500;
      color: #6a00ff;
    }

    .form-control[readonly],
    .form-control:disabled {
      background-color: #f8f4ff;
      border: 1px solid #e0d5fc;
      border-radius: 12px;
      padding: 0.5rem 1rem;
      color: #333;
    }

    textarea.form-control {
      resize: none;
    }

    @media (max-width: 768px) {
      .notice-title {
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>

  <div class="main container">
    <h2 class="text-purple mb-4">All Notices</h2>

    <!-- Notice 1 -->
    <div class="notice-block">
      <div class="notice-title">📢 Timetable Change - FY-B</div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label">Faculty</label>
          <input type="text" class="form-control" value="Faculty 2" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Class</label>
          <input type="text" class="form-control" value="FY-B" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Day</label>
          <input type="text" class="form-control" value="Monday" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Published On</label>
          <input type="text" class="form-control" value="2025-07-22" readonly>
        </div>
        <div class="col-12">
          <label class="form-label">Notice Description</label>
          <textarea class="form-control" rows="3" readonly>
Due to internal faculty meeting, lecture 2 and 3 are rescheduled post-lunch session.
          </textarea>
        </div>
      </div>
    </div>

    <!-- Notice 2 -->
    <div class="notice-block">
      <div class="notice-title">📢 Assignment Submission - SY-A</div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label">Faculty</label>
          <input type="text" class="form-control" value="Faculty 3" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Class</label>
          <input type="text" class="form-control" value="SY-A" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Day</label>
          <input type="text" class="form-control" value="Tuesday" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Published On</label>
          <input type="text" class="form-control" value="2025-07-23" readonly>
        </div>
        <div class="col-12">
          <label class="form-label">Notice Description</label>
          <textarea class="form-control" rows="3" readonly>
Please submit DBMS assignments by 25th July. Late submissions won't be accepted.
          </textarea>
        </div>
      </div>
    </div>

    <!-- Notice 3 -->
    <div class="notice-block">
      <div class="notice-title">📢 Result Announcement - TY-C</div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label">Faculty</label>
          <input type="text" class="form-control" value="Faculty 1" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Class</label>
          <input type="text" class="form-control" value="TY-C" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Day</label>
          <input type="text" class="form-control" value="Wednesday" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Published On</label>
          <input type="text" class="form-control" value="2025-07-24" readonly>
        </div>
        <div class="col-12">
          <label class="form-label">Notice Description</label>
          <textarea class="form-control" rows="3" readonly>
Internal marks result is declared and can be accessed from the college portal.
          </textarea>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

