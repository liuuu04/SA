<?php
session_start();

date_default_timezone_set('Asia/Taipei');

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$current_identify = $_SESSION['identify'];

if (isset($_POST['receiver_name'])) {
    $receiver_name = $_POST['receiver_name'];

    
    $sql_receiver_id = "SELECT identify FROM Account WHERE name = '$receiver_name'";
    $result_receiver_id = mysqli_query($link, $sql_receiver_id);
    
    if ($result_receiver_id) {
        $row = mysqli_fetch_assoc($result_receiver_id);
        $receiver_id = $row['identify'];
        
        $content = "已成為聯絡人"; 

        $timestamp = date("Y-m-d H:i:s");
    
        $sql_insert_message = "INSERT INTO message (sender_id, receiver_id, content, timestamp, identify, is_read) 
                               VALUES ('$current_identify', '$receiver_id', '$content', '$timestamp', '$current_identify', 0)";
        
        if (mysqli_query($link, $sql_insert_message)) {
            echo "已成功連繫送養者，請回到首頁與對方傳送私訊";
           
        } else {
   
            echo "ERROR: Could not able to execute $sql_insert_message. " . mysqli_error($link);
        }
    } else {
    
        echo "ERROR: Could not retrieve receiver ID for '$receiver_name'.";
    }
} else {

    echo "ERROR: Missing required information.";
}


mysqli_close($link);
?>
