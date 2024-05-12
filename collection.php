<?php
session_start(); 

if (isset($_SESSION['identify'])) {
    $identify = $_SESSION['identify'];
    $link = mysqli_connect('localhost', 'root', '', 'sa');

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if (isset($_GET['pet_id']) && isset($_GET['action'])) {
        $pet_id = $_GET['pet_id'];
        $action = $_GET['action'];
        
        if ($action === 'add') {
            // 添加收藏
            $insert_sql = "INSERT INTO collection (pet_id, identify) VALUES ('$pet_id', '$identify')";
            $result = mysqli_query($link, $insert_sql);
            if ($result) {
                echo "收藏成功";
            } else {
                echo "收藏失敗：" . mysqli_error($link);
            }
        } elseif ($action === 'remove') {
            // 刪除收藏
            $delete_sql = "DELETE FROM collection WHERE pet_id = '$pet_id' AND identify = '$identify'";
            $result = mysqli_query($link, $delete_sql);
            if ($result) {
                echo "取消收藏成功";
            } else {
                echo "取消收藏失敗：" . mysqli_error($link);
            }
        }
    } else {
        echo "参數错误";
    }

    mysqli_close($link);
} else {
    echo "请先登入";
}
?>
