<?php
include 'connection.php';

$report_id = $_GET['report_id'];
$sql = "DELETE FROM report WHERE report_id = $report_id";

if ($conn->query($sql) === TRUE) {
    header('Location: vadmin.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
