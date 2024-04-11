<?php
session_start();

date_default_timezone_set('Asia/Taipei');

$link = mysqli_connect('localhost', 'root', '12345678', 'example');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$current_account_id = $_SESSION['account_id'];

if (isset($_POST['receiver_id'], $_POST['content'], $_POST['timestamp'])) {
  
    $receiver_id = $_POST['receiver_id'];
    $content = $_POST['content'];
    $timestamp = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO Messages (sender_id, receiver_id, content, timestamp, account_id) 
            VALUES ('$current_account_id', '$receiver_id', '$content', '$timestamp', '$current_account_id')";

    if (mysqli_query($link, $sql)) {
        
        echo "sucess.";
    } else {
    
        echo "error " . mysqli_error($link);
    }
} else {
   
    echo " missing information";
}

mysqli_close($link);
?>