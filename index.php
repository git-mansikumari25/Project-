<?php
session_start();

// If user is logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

// Else show welcome page with buttons
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mess Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container {
            max-width: 500px;
            margin: auto;
            padding: 50px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 100px;
            background: #f9f9f9;
        }
        h1 {
            margin-bottom: 20px;
        }
        a.button {
            padding: 10px 20px;
            margin: 10px;
            display: inline-block;
            background: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a.button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Mess Management System</h1>
    <p>Manage your meals efficiently and easily!</p>
    <a href="login.php" class="button">Login</a>
    <a href="register.php" class="button">Register</a>
</div>

</body>
</html>
