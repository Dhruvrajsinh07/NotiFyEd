<?php
require_once "../../includes/init.php";
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

    .form-control {
        border-radius: 50px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #6a00ff;
        box-shadow: 0 0 8px rgba(106, 0, 255, 0.4);
    }

    .nav-card {
        background-color: #fff;
        box-shadow: 0 6px 15px rgba(106, 0, 255, 0.1);
        border-radius: 16px;
        padding: 1rem 2rem;
        margin-bottom: 1.5rem;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .nav-card:hover {
        box-shadow: 0 8px 20px rgba(106, 0, 255, 0.15);
        transform: translateY(-2px);
    }

    .nav-link.text-purple {
        font-weight: 600;
        transition: all 0.3s ease;
        text-align: center;
    }

    .nav-link.text-purple:hover {
        color: #5800cc !important;
        transform: scale(1.05);
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }
</style>

<body>
    <form class="registration-form" method="Post">
        <h5 class="text-center text-uppercase fw-bold mb-2" style="color: #6a00ff;">NotiFyEd</h5>
        <h3>Create Student Account</h3>

        <div class="mb-3 input-with-icon">
            <i class="fa fa-user form-icon"></i>
            <input type="text" class="form-control" id="Username" name="Username" placeholder="Username" />
        </div>
        <small id="emsg2" style="color: red;" class="text-danger d-block text-center w-100"></small>


        <div class="mb-3 input-with-icon">
            <i class="fa fa-envelope form-icon"></i>
            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email Address" />
        </div>
        <small id="emsg3" style="color: red;" class="text-danger d-block text-center w-100"></small>


        <div class="mb-3 input-with-icon">
            <i class="fa fa-envelope form-icon"></i>
            <select name="Class" id="Class">
                <option value="" disabled selected hidden>Select Class</option>
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


        <div class="mb-3 input-with-icon">
            <i class="fa fa-lock form-icon"></i>
            <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" />
        </div>
        <small id="emsg4" style="color: red;" class="text-danger d-block text-center w-100"></small>


        <div class="mb-4 input-with-icon">
            <i class="fa fa-lock form-icon"></i>
            <input type="password" class="form-control" id="CPassword" name="CPassword" placeholder="Confirm Password" />
        </div>
        <small id="emsg5" style="color: red;" class="text-danger d-block text-center w-100"></small>
        <small id="emsg1" style="color: red;" class="text-danger d-block text-center w-100"></small><br>

        <input type="button" class="btn btn-purple" value="Register" onclick="insert()" />

        <p class="text-center mt-3" style="font-size: 0.85rem; color: #888;">Powered by <span style="color: #6a00ff; font-weight: 600;">NotiFyEd</span></p>
    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function insert() {
            let username = document.getElementById('Username').value;
            let Email = document.getElementById('Email').value;
            let Class = document.getElementById('Class').value;
            let Password = document.getElementById('Password').value;
            let CPassword = document.getElementById('CPassword').value;

            document.getElementById('emsg1').innerHTML = "";
            document.getElementById('emsg2').innerHTML = "";
            document.getElementById('emsg3').innerHTML = "";
            document.getElementById('emsg4').innerHTML = "";
            document.getElementById('emsg5').innerHTML = "";


            let vname = /^[A-Za-z]+(?: [A-Za-z]+)+$/;
            let vemail = /^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,}$/;
            let vpass = /^[A-z0-9]{6,18}$/;

            if (username != "" && username != null && Email != "" && Email != null && Class != "" && Class != null && Password != "" && Password != null && CPassword != "" && CPassword != null) {
                if (vname.test(username)) {
                    if (vemail.test(Email)) {
                        if (vpass.test(Password)) {
                            if (Password == CPassword) {


                                let data = {
                                    Username: $('#Username').val(),
                                    Email: $('#Email').val(),
                                    Class: $('#Class').val(),
                                    Password: $('#Password').val()
                                }

                                $.ajax({
                                    url: "../../api/Student/register.php",
                                    method: "POST",
                                    data: data,
                                    success: function(response) {
                                        alert("Registered Successfully");
                                        window.location.href = "./register.php";
                                    },
                                    error: function(error) {
                                        alert("User With This E-mail & Password Is Already Registered");
                                        window.location.href = "./register.php";
                                    }
                                })


                            } else {
                                document.getElementById('emsg5').innerHTML = "Password Mismatched";
                                return false;
                            }
                        } else {
                            document.getElementById('emsg4').innerHTML = "Password Pattern Not Matched";
                            return false;
                        }
                    } else {
                        document.getElementById('emsg3').innerHTML = "Email Pattern Not Matched";
                        return false;
                    }
                } else {
                    document.getElementById('emsg2').innerHTML = "Name is too short";
                    return false;
                }
            } else {
                document.getElementById('emsg1').innerHTML = "Null Field Not Allowed";
                return false;
            }
        }
    </script>

</body>