<?php
require_once "../includes/init.php";
include pathof('./includes/header.php');
include pathof('./includes/navbar.php');
?>
<style>
    
/* ===========================
   Feedback Records Table Styles (from reference)
   =========================== */

/* Table container for spacing and shadow */
.table-container {
  max-width: 1100px;
  margin: 2rem auto;
  padding: 0.8rem;
  background: #ffffff;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
  overflow-x: auto; /* horizontal scroll if screen small */
}

/* Base table style */
.table {
  width: 100%;
  background-color: #fff;
  border-collapse: collapse;
  font-family: 'Poppins', sans-serif;
  font-size: 0.95rem;
  color: #333;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  border-radius: 8px;
  overflow: hidden;
  animation: fadeInTable 0.4s ease-in;
}

/* Header cells */
.table thead th {
  background-color:#6a00ff !important; /* blue theme header */
  color: #fff;
  font-weight: 600;
  font-size: 15px;
  text-align: center;
  padding: 14px;
  border-bottom: 1px solid #0056b3;
  white-space: nowrap;
}
/* Make Title column wider and improve text layout */
.table td:nth-child(2),
.table th:nth-child(2) {
  min-width: 150px;       /* increase width of Title column */
  font-size: 1rem;        /* slightly larger font for better readability */
  white-space: normal;    /* allow wrapping if needed */
  word-break: break-word; /* break long words properly */
  text-align: left;       /* keep text aligned to left */
}


/* Body cells */
.table td {
  padding: 14px;
  text-align: left;
  border-bottom: 1px solid #e9ecef;
  word-break: break-word;
  vertical-align: middle;
  transition: background-color 0.3s ease;
}

/* Row hover effect */
.table tbody tr:hover {
  background-color: #f1f3f5;
}

/* Links for update/delete if any */
.table a {
  color: #007bff;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}

.table a:hover {
  color: #0056b3;
  text-decoration: underline;
}

/* When no records */
.table tbody tr td[colspan] {
  text-align: center;
  padding: 1rem;
  color: #999;
  font-weight: 500;
}

/* Heading style */
.card-title,
h2 {
  color: #6a00ff !important;
  font-weight: 600;
  text-align: center;
  margin-top: 3rem;
  margin-bottom: 1rem;
  font-size: 2rem;
}

/* Scrollbar styling */
.table-container::-webkit-scrollbar {
  height: 6px;
}
.table-container::-webkit-scrollbar-thumb {
  background: #007bff;
  border-radius: 10px;
}
.table-container::-webkit-scrollbar-track {
  background: #f4f0fa;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .table-container {
    margin: 1rem;
    padding: 0.5rem;
  }
  .table thead th,
  .table td {
    font-size: 0.85rem;
    padding: 10px 6px;
  }
  h2.card-title {
    font-size: 1.2rem;
  }
}

@media (max-width: 480px) {
  .table-container {
    padding: 0.4rem;
    border-radius: 8px;
  }
  .table {
    font-size: 0.8rem;
    min-width: 600px; /* enable horizontal scroll on very small screens */
  }
  .table td,
  .table th {
    padding: 8px 5px;
  }
}

/* Animation */
@keyframes fadeInTable {
  from {
    opacity: 0;
    transform: scale(0.98);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}


</style>

<body>
<h2 class="card-title mb-3">Feedback Records</h2>

    <div class="table-container">
        <table class="table table-bordered table-hover align-middle mb-0" id="studentTable">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Submitted By</th>
                    <th>Submit Date</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
    </div>

    <script>
        displayfb();

        function displayfb() {
            $.ajax({
                url: "../api/feedback/feedbacks.php",
                method: "POST",
                success: function(response) {
                    let record = "";

                    if (response.feedbacks && response.feedbacks.length > 0) {
                        for (let i = 0; i < response.feedbacks.length; i++) {
                            record +=
                                `
                            <tr>
                                <td>${response.feedbacks[i].id}</td>
                                <td>${response.feedbacks[i].title}</td>
                                <td>${response.feedbacks[i].category}</td>
                                <td>${response.feedbacks[i].description}</td>
                                <td>${response.feedbacks[i].submitted_by}</td>
                                <td>${response.feedbacks[i].submit_date}</td>
                            </tr>
                            `
                        }
                    } else {
                        record += `<tr><td colspan = "6" style="text-align:center ;">No Records</td></tr>`
                    }
                    $("#tbody").html(record);
                },
                error: function(error) {
                    alert('Feedback Not Displayed');
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>