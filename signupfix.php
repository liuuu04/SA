<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $identify=$_POST['identify'];
    $name=$_POST['name'];
    $birth=$_POST['birth'];
    $email=$_POST['email'];
    $identify_phone=$_POST['identify_phone'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    
    if (isset($_FILES["identify_photo"])) {
        $identify_photo = $_FILES["identify_photo"];

        
        if ($identify_photo["error"] == UPLOAD_ERR_OK) {
           
            $uploadDir = "identify/";

            $fileName = basename($identify_photo["name"]);

            $uploadPath = $uploadDir . $fileName;
            $identify_level="member";
            
            if (move_uploaded_file($identify_photo["tmp_name"], $uploadPath)) {
                
                
                $link = mysqli_connect('localhost', 'root', 'han20000914', 'sa');

                $sql = "INSERT INTO  account (identify, password, name, gender, birth, identify_photo, identify_phone, identify_level, email)
                        VALUES ('$identify', '$password', '$name', '$gender', '$birth', '$uploadPath', '$identify_phone', '$identify_level', '$email')";
                
                $result=mysqli_query($link, $sql);
                if($result)
        {        
                header("Location:profile.php");}

            } else {
                echo "檔案移動失敗。";
            }
        } else {
            echo "檔案上傳失敗，錯誤代碼：" . $identify_photo["error"];
        }
    } else {
        echo "請選擇檔案。";
    }
}
?>