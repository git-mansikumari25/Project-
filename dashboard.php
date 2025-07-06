<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Mess Management</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        ul li {
            margin: 10px 0;
        }
        a.button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        a.button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Welcome to Mess Management Dashboard</h2>
    <ul>
        <li><a href="add_meal.php" class="button">Add Meal</a></li>
        <li><a href="view_meals.php" class="button">View Meals</a></li>
        <li><a href="upload_menu.php" class="button">Upload Menu Image</a></li>
        <li><a href="menu.php" class="button">View Menu Images</a></li>
        <li><a href="logout.php" class="button">Logout</a></li>
    </ul>
</div>
</body>
</html>
