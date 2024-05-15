<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $pet_id=$_POST['pet_id'];
     $name=$_POST['name'];
     $pet_name=$_POST['pet_name'];
     $identify=$_POST['identify'];

    if (isset($_FILES["file"])) {
        $file = $_FILES["file"];

        if ($file["error"] == UPLOAD_ERR_OK) {
            $uploadDir = "heart/";
            $fileName = basename($file["name"]);
            $uploadPath = $uploadDir . $fileName;

            if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
                


                $uploadTime = date('Y-m-d H:i:s');

                $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
                if (!$link) {
                    die('Could not connect: ' . mysqli_connect_error());
                }

                $sql = "INSERT INTO heart_file (identify, name,  pet_id, pet_name, file, uploadtime)
                        VALUES ('$identify','$name' , '$pet_id' ,'$pet_name', '$uploadPath', '$uploadTime')";
                $result=mysqli_query($link, $sql);
                if($result){ 
                    echo "<script>
                    alert('已成功申請!');
                    setTimeout(function(){
                        window.location.href = 'index.php';
                    }, 500); // 
                  </script>";
                } else {
                    echo "資料庫插入失敗: " . mysqli_error($link);
                //     echo "<script>
                //     alert('申請失敗，請檢查檔案是否上傳!');
                //     setTimeout(function(){
                //         window.location.href = 'index.php';
                //     }, 500); // 
                //   </script>";
                }
                mysqli_close($link);
            } else {
                echo "檔案移動失敗。";
            }
        } else {
            echo "檔案上傳失敗，錯誤代碼：" . $file["error"];
        }
    } else {
        echo "請選擇檔案。";
    }
}
?>

   

