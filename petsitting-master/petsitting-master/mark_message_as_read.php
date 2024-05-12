<?php
session_start();

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$current_identify = $_SESSION['identify'];

if (isset($_GET['message_id'])) {
    $message_id = $_GET['message_id'];

    $updateSql = "UPDATE message SET is_read = 1 WHERE id = '$message_id'";
    if (mysqli_query($link, $updateSql)) {
        echo "Message marked as read.";
    } else {
        echo "ERROR: Could not able to execute $updateSql. " . mysqli_error($link);
    }
} else {
    echo "ERROR: Missing required information.";
}

mysqli_close($link);
?>
