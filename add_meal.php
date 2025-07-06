<?php include "includes/config.php"; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Meal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Add Meal</h2>
<form method="post">
    <input type="date" name="meal_date" required>
    <input name="meal_type" placeholder="Breakfast/Lunch/Dinner" required>
    <input type="number" name="quantity" placeholder="Quantity" required>
    <button name="add">Add</button>
</form>

<?php
if (isset($_POST['add'])) {
    $uid = $_SESSION['user_id'];
    $date = $_POST['meal_date'];
    $type = $_POST['meal_type'];
    $qty = $_POST['quantity'];

    $conn->query("INSERT INTO meals (user_id, meal_date, meal_type, quantity) 
                  VALUES ('$uid', '$date', '$type', '$qty')");
    echo "<p>Meal added!</p>";
}
?>
</body>
</html>
