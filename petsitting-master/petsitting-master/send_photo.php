<?php
session_start();

date_default_timezone_set('Asia/Taipei');

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$current_identify = $_SESSION['identify'];

if (isset($_FILES['photo']['name'], $_POST['receiver_id'])) {
    $receiver_id = $_POST['receiver_id'];
    $timestamp = date("Y-m-d H:i:s");
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp_name = $_FILES['photo']['tmp_name'];
    $photo_destination = "img/" . $photo_name;

    if (move_uploaded_file($photo_tmp_name, $photo_destination)) {
 
        $sql = "INSERT INTO message (sender_id, receiver_id, content, timestamp, identify) 
                VALUES ('$current_identify', '$receiver_id', '$photo_destination', '$timestamp', '$current_identify')";
    
        if (mysqli_query($link, $sql)) {
            echo "Photo sent successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    } else {
        echo "ERROR: Failed to move photo to destination.";
    }
} else {
    echo "ERROR: Missing required information.";
}

mysqli_close($link);
?>