<?php
session_start();
date_default_timezone_set('Asia/Taipei');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_name = $_POST['pet_name'];
    $pet_age = $_POST['pet_age'];
    $pet_character = $_POST['pet_character'];
    $pet_medical = $_POST['pet_medical'];
    $pet_type = $_POST['pet_type'];
    $pet_variety = ($_POST["pet_variety"] == "其他") ? $_POST["other_breed_text"] : $_POST["pet_variety"];
    $pet_color = $_POST['pet_color'];
    $pet_gender = $_POST['pet_gender'];
    $pet_size = $_POST['pet_size'];
    $pet_address = $_POST['pet_address'];
    $pet_ligation = $_POST['pet_ligation'];
    $pet_publish = date("Y-m-d");
    $pet_withkidpet = $_POST['pet_withkidpet'];
    $pet_heart = $_POST['pet_heart'];
    $pet_explain = $_POST['pet_explain'];
    $pet_medical = $_POST['pet_medical_select'];

    

    $identify = $_SESSION['identify'];

    $link = mysqli_connect('localhost', 'root', 'han20000914', 'sa');
    if (!$link) {
        die("連接資料庫失敗: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO pet (pet_name,pet_age,pet_character,pet_medical,
    pet_type,pet_variety,pet_color,pet_gender,pet_size,pet_address,pet_ligation,
    pet_publish,pet_withkidpet,pet_heart,pet_explain,identify,pet_level) 
    VALUES ('$pet_name','$pet_age','$pet_character','$pet_medical',
    '$pet_type','$pet_variety','$pet_color','$pet_gender','$pet_size','$pet_address',
    '$pet_ligation','$pet_publish','$pet_withkidpet','$pet_heart','$pet_explain','$identify','in_progress')";

    if (mysqli_query($link, $sql)) {
        $last_inserted_pet_id = mysqli_insert_id($link); 

        echo "寵物新增成功";
        header("Location: pet_post_photo.php?pet_id=$last_inserted_pet_id");

        exit();
    } else {
        echo "新增失敗：" . $sql . "<br>" . mysqli_error($link);
    }

    if (isset($_POST['pet_medical'])) {
        $medicalHistories = $_POST["pet_medical"];

        
        $stmt = $link->prepare("INSERT INTO pet_medical (pet_id, medical_content) VALUES (?, ?)");

        if ($stmt === false) {
            die('無法準備 SQL 語句: ' . htmlspecialchars($link->error));
        }

        
        $stmt->bind_param("is", $last_inserted_pet_id, $medical_content);

        
        foreach ($medicalHistories as $pet_medical_history) {
            $medical_content = $pet_medical_history;
        
            if ($stmt->execute() === TRUE) {
                echo "新增資料成功。";
            } else {
                echo "發生錯誤: " . $stmt->error;
            }
        }

        // 关闭语句
        $stmt->close();
    } else {
        echo "未收到 pet_medical 內容。";
    }

    mysqli_close($link);
}
?>
