<?php include "includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validate.js"></script>
</head>
<body>
<h2>Register</h2>
<form method="post" onsubmit="return validateRegister();">
    <input name="name" id="name" placeholder="Full Name">
    <input name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Password">
    <button name="register">Register</button>
</form>

<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')");
    echo "<p>Registered successfully!</p>";
}
?>
</body>
</html>
