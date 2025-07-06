<?php include "includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Mess Menu</title>
    <style>
        img {
            width: 300px;
            margin: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<h2>Mess Menu Gallery</h2>

<?php
$res = $conn->query("SELECT * FROM menu_images ORDER BY uploaded_on DESC");
while ($row = $res->fetch_assoc()) {
    echo "<img src='images/{$row['image_name']}' alt='Menu Image'>";
}
?>

<br><a href="dashboard.php">← Back to Dashboard</a>
</body>
</html>
