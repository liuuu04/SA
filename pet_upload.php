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

    if (isset($_FILES['pet_photo'])) {
        $upload_dir = 'img/'; 

        $photo_name = basename($_FILES['pet_photo']['name']);
        $photo_tmp_name = $_FILES['pet_photo']['tmp_name'];
        $photo_destination = $upload_dir . $photo_name;

        if (move_uploaded_file($photo_tmp_name, $photo_destination)) {
            echo "照片上传成功。<br>";
            $pet_photo = $photo_destination;

            $identify = $_SESSION['identify'];

            $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
            mysqli_select_db($link, 'sa');

            if (!$link) {
                die("连接数据库失败: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO pet (pet_name,pet_age,pet_character,pet_medical,
            pet_type,pet_variety,pet_color,pet_gender,pet_size,pet_address,pet_ligation,
            pet_publish,pet_withkidpet,pet_heart,pet_explain,pet_photo,identify) 
            VALUES ('$pet_name','$pet_age','$pet_character','$pet_medical',
            '$pet_type','$pet_variety','$pet_color','$pet_gender','$pet_size','$pet_address',
            '$pet_ligation','$pet_publish','$pet_withkidpet','$pet_heart','$pet_explain','$pet_photo','$identify')";

            if (mysqli_query($link, $sql)) {
                echo "宠物信息插入成功";
                $last_inserted_pet_id = mysqli_insert_id($link);

                $pet_medical_records = $_POST['pet_medical'];

                foreach ($pet_medical_records as $medical_record) {
        
                    $insert_medical_sql = "INSERT INTO pet_medical (pet_id, medical_content) 
                                    VALUES ('$last_inserted_pet_id', '$medical_record')";

                    if (mysqli_query($link, $insert_medical_sql)) {
                        echo "病史插入成功";
                        
                    } else {
                        echo "病史插入失敗: " . mysqli_error($link);
                    }
                }

                header("Location: index.php");
                exit(); 
            } else {
                echo "發生錯誤: " . $sql . "<br>" . mysqli_error($link);
            }

            mysqli_close($link);
        } else {
            echo "照片上传失败。<br>";
        }
    }
}
?>
