<?php
session_start();

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$current_identify = $_SESSION['identify'];

$sql = "SELECT COUNT(*) AS total_unread_count FROM message WHERE receiver_id = '$current_identify' AND is_read = 0";

$result = mysqli_query($link, $sql);

if ($result === false) {
    die("ERROR: Could not execute query. " . mysqli_error($link));
}

$row = mysqli_fetch_assoc($result);
$total_unread_count = $row['total_unread_count'];

echo $total_unread_count;

mysqli_close($link);
?>
