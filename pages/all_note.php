<?php
require_once "../includes/init.php";
include pathof('./includes/header.php');
include pathof('./includes/navbar.php');

$role = $_SESSION['role'] ?? null;


$general = [];
$personal = [];

if ($role == 'student') {
  $user_class = $_SESSION['class'];
  $user_email = $_SESSION['email'];

  $q = "SELECT title AS notice_title, 
  noticeCategory AS category, 
  facultyName AS faculty,
  targetClass AS target, 
  noticeBody AS body, 
  noticeDay AS day, 
  publishDate AS date
  FROM issue_notice
  WHERE targetClass = 'all' OR targetClass = ?
  ORDER BY publishDate DESC";

  $stmt1 = $conn->prepare($q);
  $stmt1->execute([$user_class]);
  $general = $stmt1->fetchAll(PDO::FETCH_ASSOC);

  $q2 = "SELECT
              notice_title,
              category,
              faculty,
              'Personal' AS target,
              noticeBody AS body,
              dayInput AS day,
              dateInput AS date
           FROM issue_personal_notice
           WHERE student_email = ?
           ORDER BY dateInput DESC";
  $stmt2 = $conn->prepare($q2);
  $stmt2->execute([$user_email]);
  $personal = $stmt2->fetchAll(PDO::FETCH_ASSOC);
} else {
  $q = "SELECT title AS notice_title, 
  noticeCategory AS category, 
  facultyName AS faculty, 
  targetClass AS target, 
  noticeBody AS body, 
  noticeDay AS day, 
  publishDate AS date
  FROM issue_notice ORDER BY publishDate DESC";
$stmt1 = $conn->prepare($q);
$stmt1->execute();
$general = $stmt1->fetchAll(PDO::FETCH_ASSOC);

$q2 = "SELECT
              notice_title,
              category,
              faculty,
              student_name AS target,
              noticeBody AS body,
              dayInput AS day,
              dateInput AS date
           FROM issue_personal_notice
           ORDER BY dateInput DESC";
    $stmt2 = $conn->prepare($q2);
    $stmt2->execute();
    $personal = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}

$notices = array_merge($general, $personal);

usort($notices, function($a, $b) {
  return strtotime($b['date']) - strtotime($a['date']);
});
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
    foreach ($notices as $n) :
    ?>
      <div class="notice-block">
        <div class="notice-title">📢 <?= $n['category'] ?> - <?= $n['target'] ?></div>
        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label class="form-label">Faculty</label>
            <input type="text" class="form-control" value="<?= $n['faculty'] ?>" readonly>
          </div>
          <div class="col-md-6">
            <label class="form-label">Class</label>
            <input type="text" class="form-control" value="<?= $n['target'] ?>" readonly>
          </div>
          <div class="col-md-6">
            <label class="form-label">Day</label>
            <input type="text" class="form-control" value="<?= $n['day'] ?>" readonly>
          </div>
          <div class="col-md-6">
            <label class="form-label">Published On</label>
            <input type="text" class="form-control" value="<?= $n['date'] ?>" readonly>
          </div>
          <div class="col-12">
            <label class="form-label">Notice Description</label>
            <textarea class="form-control" rows="3" readonly>
          <?= $n['body'] ?>
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