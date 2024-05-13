<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identify=$_SESSION['identify'];
    $pet_id=$_POST['pet_id'];
    $pet_name = $_POST['pet_name'];
    $pet_age = $_POST['pet_age'];
    $pet_character = $_POST['pet_character'];
    $pet_medical = $_POST['pet_medical'];
    $pet_type = $_POST['pet_type'];
    $pet_variety = $_POST['pet_variety'];
    $pet_color = $_POST['pet_color'];
    $pet_gender = $_POST['pet_gender'];
    $pet_size = $_POST['pet_size'];
    $pet_address = $_POST['pet_address'];
    $pet_ligation = $_POST['pet_ligation'];
    $pet_withkidpet = $_POST['pet_withkidpet'];
    $pet_heart = $_POST['pet_heart'];
    $pet_explain=$_POST['pet_explain'];

    $link=mysqli_connect('localhost', 'root', '12345678','sa');

    
    $sql = "UPDATE pet SET pet_name='$pet_name', pet_variety='$pet_variety',pet_age='$pet_age', pet_color='$pet_color', pet_gender='$pet_gender',
    pet_type='$pet_type', pet_size='$pet_size',  pet_address='$pet_address', pet_ligation='$pet_ligation', pet_heart='$pet_heart', pet_medical='$pet_medical', pet_character='$pet_character',
    pet_withkidpet='$pet_withkidpet' , pet_explain='$pet_explain' , identify='$identify' WHERE pet_id='$pet_id' ";
    $result = mysqli_query($link, $sql);

    if (!$result) {
        echo "更新失敗: " . mysqli_error($link);
    } else {
        echo "<script>
        alert('寵物資訊已成功更新!');
        setTimeout(function(){
            window.location.href = 'editpet.php?pet_id=$pet_id';
        }, 500); // 
      </script>";
    }

   

    $sql_delete = "DELETE FROM pet_medical WHERE pet_id='$pet_id'";
    $result_delete = mysqli_query($link, $sql_delete);

if (!$result_delete) {
    echo "刪除舊的寵物病史紀錄時出現錯誤: " . mysqli_error($link);
} else {
    echo "舊的寵物病史紀錄已成功刪除";
}
    
    if (isset($_POST["medical_content"])) {
        
        $medical_contents = $_POST["medical_content"];

        foreach ($medical_contents as $medical_content) {

            $current_medical_content = mysqli_real_escape_string($link, $medical_content);
            $sql1 = "INSERT INTO pet_medical (pet_id, medical_content) VALUES ('$pet_id', '$current_medical_content')";
            $result1 = mysqli_query($link, $sql1);
            if ($result1) {
                echo "寵物的病史紀錄： " . $medical_content;
            } else {
                echo "插入寵物的病史紀錄時出現錯誤：" . mysqli_error($link);
            }
        }
    } else {
        echo "未找到 medical_content 欄位";
    }
} else {
    echo "未接到值喔";
}
?>
