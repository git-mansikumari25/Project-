<?php include "includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Menu Images</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Upload Mess Menu Images</h2>

<form method="post" enctype="multipart/form-data">
    <label>Select Menu Image(s):</label><br>
    <input type="file" name="menu_images[]" multiple required><br><br>
    <button name="upload">Upload</button>
</form>

<?php
if (isset($_POST['upload'])) {
    foreach ($_FILES['menu_images']['tmp_name'] as $key => $tmp) {
        $fileName = $_FILES['menu_images']['name'][$key];
        $target = "images/" . basename($fileName);

        if (move_uploaded_file($tmp, $target)) {
            $conn->query("INSERT INTO menu_images (image_name) VALUES ('$fileName')");
            echo "<p style='color:green;'>Uploaded: $fileName</p>";
        } else {
            echo "<p style='color:red;'>Failed to upload: $fileName</p>";
        }
    }
}
?>
<a href="menu.php">View Menu Images →</a>
</body>
</html>

