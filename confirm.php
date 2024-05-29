<?php
session_start();

date_default_timezone_set('Asia/Taipei');

$pet_id = $_GET['pet_id'];

$current_identify = $_SESSION['identify'];

$sql_adopter_name = "SELECT name FROM heart_file WHERE pet_id = '$pet_id'";
$result_adopter_name = mysqli_query($conn, $sql_adopter_name);

if ($result_adopter_name && mysqli_num_rows($result_adopter_name) > 0) {
    $row = mysqli_fetch_assoc($result_adopter_name);
    $adopter_name = $row['name'];

    $sql_adopter_identify = "SELECT identify FROM Account WHERE name = '$adopter_name'";
    $result_adopter_identify = mysqli_query($conn, $sql_adopter_identify);

    if ($result_adopter_identify && mysqli_num_rows($result_adopter_identify) > 0) {
        $row = mysqli_fetch_assoc($result_adopter_identify);
        $adopter_identify = $row['identify'];

        $sql_update_pet = "UPDATE pet SET pet_level='endprogress' WHERE pet_id='$pet_id'";
        $sql_update_heart = "UPDATE heart_file SET is_heart=1 WHERE pet_id='$pet_id'";
        
        if (mysqli_query($conn, $sql_update_pet) && mysqli_query($conn, $sql_update_heart)) {
   
            $content = "愛心切結書已通過審核";
            $timestamp = date("Y-m-d H:i:s");

            $sql_send_message = "INSERT INTO message (sender_id, receiver_id, content, timestamp, identify, is_read) 
                                 VALUES ('$current_identify', '$adopter_identify', '$content', '$timestamp', '$current_identify', 0)";

            if (mysqli_query($conn, $sql_send_message)) {
                echo "<script>
                alert('寵物已成功完成送養，送養狀態改為已送養，並通知了領養者。謝謝您替寵物找到一個溫暖的家。');
                window.location.href = 'index.php';
                </script>";
            } else {
                echo "消息發送失敗: " . mysqli_error($conn);
            }
        } else {
            echo "更新寵物狀態或心意確認狀態失敗: " . mysqli_error($conn);
        }
    } else {
        echo "無法查詢到領養者的 identify 信息: " . mysqli_error($conn);
    }
} else {
    echo "無法查詢到領養者名稱信息: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
