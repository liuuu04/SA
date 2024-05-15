<?php
session_start();
include('connection.php');
if (!isset($_SESSION['identify'])) {
    header("Location: login.php");
    exit();
}
$pet_id=$_REQUEST['pet_id'];
$query = "DELETE FROM pet WHERE pet_id=$pet_id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
header("Location: showpet.php"); 
exit();

?>
