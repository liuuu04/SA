<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>寵物上傳</title>
</head>
<?php
// 檢查是否有 POST 請求
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_name = $_POST['pet_name'];
    $pet_age = $_POST['pet_age'];
    $pet_character = $_POST['$pet_character'];
    $pet_medical=$_POST['pet_medical'];
    $pet_type=$_POST['pet_type'];
    $pet_variety=$_POST['pet_variety'];
    $pet_color=$_POST['pet_color'];
    $pet_gender=$_POST['pet_gender'];
    $pet_size=$_POST['pet_size'];
    $pet_address=$_POST['pet_address'];
    $pet_ligation=$_POST['pet_ligation'];
    $pet_publish=$_POST['pet_publish'];
    $pet_withkidpet=$_POST['withkidpet'];
    $pet_heart=$_POST['pet_heart'];
    $pet_photo=$_POST['pet_photo'];
    $pet_explain=$_POST['pet_explain'];



    // 連接到資料庫
    $link = mysqli_connect('localhost','root');
    mysqli_select_db($link,'sa');

    // 檢查資料庫連接是否成功
    if (!$link) {
        die("連接資料庫失敗: " . mysqli_connect_error());
    }

    // 將寵物資訊插入資料庫的 pet 表中
    $sql = "INSERT INTO pet (pet_name, pet_age, ...) VALUES ('$pet_name', '$pet_age', ...)";
    
    if (mysqli_query($link, $sql)) {
        echo "寵物資訊插入成功";
    } else {
        echo "發生錯誤: " . $sql . "<br>" . mysqli_error($link);
    }

    // 關閉資料庫連接
    mysqli_close($link);
}
?>


</body>
</html>