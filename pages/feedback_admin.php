<?php
require_once "../includes/init.php";
include pathof('./includes/header.php');
include pathof('./includes/navbar.php');
?>

<body>

    <div class="table-container">
        <table class="table table-bordered table-hover align-middle mb-0" id="studentTable">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Submitted_By</th>
                    <th>Submit_Date</th>
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
</body>