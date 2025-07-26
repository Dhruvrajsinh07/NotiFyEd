<?php
require_once "../includes/init.php";
include pathof('./includes/header.php');
include pathof('./includes/navbar.php');

$q = "SELECT title, noticeCategory, facultyName, targetClass, noticeBody, noticeDay, publishDate FROM issue_notice";

$stmt = $conn->prepare($q);
$stmt->execute();

$notices = $stmt->fetchAll(PDO::FETCH_ASSOC)
?>

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

    <?php
    foreach($notices as $n):
    ?>
    <div class="notice-block">
      <div class="notice-title">📢 <?= $n['noticeCategory']?> - <?= $n['targetClass']?></div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label">Faculty</label>
          <input type="text" class="form-control" value="<?= $n['facultyName']?>" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Class</label>
          <input type="text" class="form-control" value="<?= $n['targetClass']?>" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Day</label>
          <input type="text" class="form-control" value="<?= $n['noticeDay']?>" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Published On</label>
          <input type="text" class="form-control" value="<?= $n['publishDate']?>" readonly>
        </div>
        <div class="col-12">
          <label class="form-label">Notice Description</label>
          <textarea class="form-control" rows="3" readonly>
          <?= $n['noticeBody']?>
          </textarea>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>