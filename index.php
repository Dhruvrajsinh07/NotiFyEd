<?php
require_once "./includes/init.php";
include pathof('./includes/header.php');
include pathof('./includes/navbar.php');

// Assuming you store role and username in session
$role = $_SESSION['role'] ?? 'User';
$username = $_SESSION['username'] ?? 'Guest';
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

  p {
    font-size: 1.05rem;
    line-height: 1.6;
  }
</style>

<body>
  <div class="main container">
    <div class="card p-4">
      <h2 class="card-title mb-3">Welcome, <?= ucfirst($username); ?>!</h2>
      <p class="mb-1"><strong>You are logged in as:</strong> <span class="text-purple"><?= ucfirst($role); ?></span></p>

      <?php if (strtolower($role) === 'admin'): ?>
        <p class="mt-4">As an <strong>Admin</strong>, you can create, manage and schedule important notices, whether public or personal, for different classes. Use the dashboard to post updates, track published notices, and engage effectively with students. Ensure timely communication using categorized announcements.</p>
      <?php elseif (strtolower($role) === 'student'): ?>
        <p class="mt-4">As a <strong>Student</strong>, you can view all notices related to your class, assignments, holidays, and personal messages. This system keeps you updated with important announcements. Stay tuned and always check your dashboard for the latest info.</p>
      <?php else: ?>
        <p class="mt-4">Welcome to the Digital Notice Board system. Please use the navigation bar to access the features available to your role.</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
