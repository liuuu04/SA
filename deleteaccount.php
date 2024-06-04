<?php
include 'connection.php';

$identify= $_GET['identify'];
$sql = "DELETE FROM account WHERE identify = $identify";

if ($conn->query($sql) === TRUE) {
    header('Location: vadmin.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
