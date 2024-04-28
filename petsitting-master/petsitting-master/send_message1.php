<?php
session_start();

date_default_timezone_set('Asia/Taipei');

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$current_identify = $_SESSION['identify'];

if (isset($_POST['receiver_id'], $_POST['content'], $_POST['timestamp'])) {
 
    $receiver_id = $_POST['receiver_id'];
    $content = $_POST['content']; 
    $timestamp = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO message (sender_id, receiver_id, content, timestamp, identify) 
            VALUES ('$current_identify', '$receiver_id', '$content', '$timestamp', '$current_identify')";
    
    if (mysqli_query($link, $sql)) {
      
        echo "Message sent successfully.";
    } else {
     
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
} else {
   
    echo "ERROR: Missing required information.";
}

mysqli_close($link);
?>
