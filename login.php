<?php include "includes/config.php"; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validate.js"></script>
</head>
<body>
<h2>Login</h2>
<form method="post" onsubmit="return validateLogin();">
    <input name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Password">
    <button name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE email='$email'");
    $user = $res->fetch_assoc();
    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "<p>Login failed!</p>";
    }
}
?>
</body>
</html>
