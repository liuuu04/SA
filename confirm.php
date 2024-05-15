<?php
    $pet_id = $_GET['pet_id'];
    include 'connection.php'; 
    $sql = "UPDATE pet SET pet_level='endprogress' WHERE pet_id='$pet_id' ";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "<script>
        alert('寵物已成功完成送養，送養狀態改為已送養，謝謝您替寵物找到一個溫暖的家。');
        window.location.href = 'index.php'; // 不需要使用 setTimeout
        </script>";
    } else {
        echo "送養失敗";
    }
?>
