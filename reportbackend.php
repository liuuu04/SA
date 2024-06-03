<?php
session_start();
include_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identify = $_POST['identify'];
    $pet_id = $_GET['pet_id'];
    $reportedidentify = $_POST['reportedidentify'];
   
    if (!empty($_POST['content'])) {
       
        $content = $_POST['content'];
       
        $content_str = implode(',', $content);
    } 

    $comment = $_POST['comment'];

    
    $sql = "INSERT INTO report (identify, reportedidentify, pet_id, content, comment) VALUES ('$identify', '$reportedidentify', '$pet_id', '$content_str', '$comment')";

   
    if (mysqli_query($conn, $sql)) {
      
        $_SESSION['identify'] = $identify;
       
        header("Location: index.php");
        exit();
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request method.";
}


mysqli_close($conn);
?>
