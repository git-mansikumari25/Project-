<?php include "includes/config.php"; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Meals</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Your Meals</h2>
<table>
<tr><th>Date</th><th>Type</th><th>Qty</th></tr>
<?php
$uid = $_SESSION['user_id'];
$res = $conn->query("SELECT * FROM meals WHERE user_id='$uid'");
while($row = $res->fetch_assoc()) {
    echo "<tr><td>{$row['meal_date']}</td><td>{$row['meal_type']}</td><td>{$row['quantity']}</td></tr>";
}
?>
</table>
</body>
</html>
