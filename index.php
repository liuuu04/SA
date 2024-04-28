<?php
session_start();
// Include database connection file
include_once('connection.php');
if (!isset($_SESSION['identify'])) {
    header("Location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><a href="logout.php">Hi, <?php echo ucwords($_SESSION['name']); ?> Log out</a></p>
<p><a href="view.php">想看您的個人資料嗎？</a></p>
</body>
</html>
