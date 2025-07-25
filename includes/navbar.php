<!-- navbar.php -->
<!-- Site Name -->
<div class="text-center py-3" style="font-size: 1.8rem; font-weight: 700; color: #6a00ff;">
  NotiFyEd Admin
</div>

<!-- Custom Top Navbar -->
<div class="container">
  <div class="nav-card">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid px-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav justify-content-around w-100">
            <li class="nav-item">
              <a class="nav-link text-purple" href="../pages/post_note.php">Post Notice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-purple" href="../pages/all_note.php">All Notices</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-purple" href="#">Schedule Notices</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-purple" href="../index.php">Profile</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-purple" href="#">Email Notifications</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-purple" href="../pages/personal.php">Personal Notice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-purple" href="<?=urlof('api/user/logout.php')?> " onclick="return confirm('Sure! You Want To Logout.');">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
