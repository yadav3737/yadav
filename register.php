<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (First_Name, Last_Name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Registration successful! Click OK to login.');
                window.location='login.php';
              </script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background:#120331;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .social-btn {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }
        .social-btn a {
            text-decoration: none;
            padding: 10px;
            width: 48%;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            color: white;
        }
        .facebook-btn {
            background-color: #3b5998;
        }
        .google-btn {
            background-color: #db4437;
        }
        .facebook-btn:hover {
            background-color: #2d4373;
        }
        .google-btn:hover {
            background-color: #c1351d;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h2 class="text-center">Register</h2>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="Enter your first name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Enter your last name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>

                <!-- Social Media Login Buttons -->
                <div class="social-btn">
                    <a href="#" class="facebook-btn"><i class="fab fa-facebook-f"></i>facebook</a>
                    <a href="#" class="google-btn"><i class="fab fa-google"></i> google </a>
                </div>

                <p class="text-center mt-3">Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
    </div>

    <script src=""></script>
</body>
</html>
