<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f0fa;
      padding: 2rem;
    }

    h2 {
      color: #6a00ff;
      font-weight: 600;
      margin-bottom: 1.5rem;
    }

    .search-bar {
      margin-bottom: 1.5rem;
      display: flex;
      justify-content: flex-end;
    }

    .search-input {
      border-radius: 50px;
      border: 1px solid #ccc;
      padding: 0.5rem 1rem;
      width: 300px;
      transition: box-shadow 0.3s ease;
    }

    .search-input:focus {
      outline: none;
      border-color: #6a00ff;
      box-shadow: 0 0 10px rgba(106, 0, 255, 0.3);
    }

    .table-container {
      background: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      box-shadow: 0 10px 25px rgba(106, 0, 255, 0.1);
      border-radius: 20px;
      padding: 2rem;
      overflow-x: auto;
    }

    thead th {
      background-color: #6a00ff;
      color: white;
      font-weight: 600;
      text-align: center;
      vertical-align: middle;
    }

    tbody td {
      text-align: center;
      vertical-align: middle;
    }

    .btn-purple {
      background-color: #6a00ff;
      color: white;
      font-weight: 500;
      border-radius: 50px;
      padding: 0.4rem 1rem;
      transition: all 0.3s ease;
      border: none;
    }

    .btn-purple:hover {
      background-color: #5800cc;
      box-shadow: 0 6px 12px rgba(106, 0, 255, 0.2);
      transform: scale(1.03);
    }

    @media (max-width: 768px) {
      .search-bar {
        justify-content: center;
      }

      .search-input {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <!-- Page Heading -->
  <div class="container">
    <h2>Send Personal Notice to Students</h2>

    <!-- Search Bar -->
    <div class="search-bar">
      <input type="text" class="form-control search-input" id="studentSearch" placeholder="Search by name, class, roll no..." onkeyup="filterStudents()" />
    </div>

    <!-- Table Container -->
    <div class="table-container">
      <table class="table table-bordered table-hover align-middle mb-0" id="studentTable">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Class</th>
            <th>Roll No.</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example rows -->
          <tr>
            <td>1</td>
            <td>FY-A</td>
            <td>101</td>
            <td>Rahul Sharma</td>
            <td><button class="btn btn-purple" onclick="giveNotice()">Give Notice</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>SY-B</td>
            <td>205</td>
            <td>Priya Deshmukh</td>
            <td><button class="btn btn-purple">Give Notice</button></td>
          </tr>
          <tr>
            <td>3</td>
            <td>TY-C</td>
            <td>309</td>
            <td>Mohit Verma</td>
            <td><button class="btn btn-purple">Give Notice</button></td>
          </tr>
          <!-- More rows to be dynamically added with PHP -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Search Filter Script -->
  <script>
    function filterStudents() {
      const input = document.getElementById("studentSearch").value.toLowerCase();
      const rows = document.querySelectorAll("#studentTable tbody tr");

      rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(input) ? "" : "none";
      });
    }

    function giveNotice(studentName) {
      alert("You clicked to give notice to: " + studentName);
      window.location.href="./pp_note.php";
    }
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
