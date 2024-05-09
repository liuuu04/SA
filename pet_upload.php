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
    $pet_medical= $_POST['pet_medical_select'];


    if (isset($_FILES['pet_photo'])) {
        $upload_dir = 'img/';

        $photo_name = basename($_FILES['pet_photo']['name']);
        $photo_tmp_name = $_FILES['pet_photo']['tmp_name'];
        $photo_destination = $upload_dir . $photo_name;

        if (move_uploaded_file($photo_tmp_name, $photo_destination)) {
            echo "照片上傳成功。<br>";
            $pet_photo = $photo_destination;
        } else {
            echo "照片上傳失敗。<br>";
        }
    }
    $pet_explain = $_POST['pet_explain'];
    $identify = $_SESSION['identify'];

    $link = mysqli_connect('localhost', 'root', '', 'sa');
    if ($link->connect_error) {
        die("連接失敗：" . $link->connect_error);
    }
    $sql = "INSERT INTO pet (pet_name,pet_age,pet_character,pet_medical,
    pet_type,pet_variety,pet_color,pet_gender,pet_size,pet_address,pet_ligation,
    pet_publish,pet_withkidpet,pet_heart,pet_explain,pet_photo,identify) 
    VALUES ('$pet_name','$pet_age','$pet_character','$pet_medical',
    '$pet_type','$pet_variety','$pet_color','$pet_gender','$pet_size','$pet_address',
    '$pet_ligation','$pet_publish','$pet_withkidpet','$pet_heart','$pet_explain','$pet_photo','$identify')";

    if(mysqli_query($link,$sql)){
        echo "寵物新增成功";
        header("Loacation:index.php");
        exit();
    }else{
        echo "新增失敗：".$sql."<br>".mysqli_error($link);
    }
    
    if (isset($_POST['pet_medical'])) {
        $medicalHistories = $_POST["pet_medical"];
        $stmt = $link->prepare("INSERT INTO pet_medical (medical_content, medical_date) VALUES (?, ?)");
    
        if ($stmt === false) {
            die('無法準備 SQL 語句: ' . htmlspecialchars($link->error));
        }
    
        $stmt->bind_param("ss", $medical_content, $medical_date);
    
        foreach ($_POST['pet_medical'] as $key => $pet_medical_history) {
            $medical_content = $pet_medical_history;
            $medical_date = $_POST['pet_medical_date'][$key];
            if ($stmt->execute() === TRUE) {
                echo "新紀錄插入成功。";
            } else {
                echo "插入失敗: " . $stmt->error;
            }
        }
        
        $stmt->close();
        mysqli_close($link);
    } else {
        echo "未收到 pet_medical 數據。";
    }
    
    }
?>