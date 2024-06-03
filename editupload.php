<?php
$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

if (isset($_POST['pet_id'])) {
    $pet_id = $_POST['pet_id'];
    $uploadDirectory = 'photo/';

    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    $uploadSuccess = false;



    if (isset($_FILES['files1'])) {
        foreach ($_FILES['files1']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['files1']['name'][$key];
            $file_tmp = $_FILES['files1']['tmp_name'][$key];
            $targetFilePath = $uploadDirectory . $file_name;

            if (move_uploaded_file($file_tmp, $targetFilePath)) {
                $sql = "INSERT INTO pet_photo (pet_id, pet_photo1, upload_time) VALUES ('$pet_id', '$targetFilePath', NOW())";
                if (mysqli_query($link, $sql)) {
                    $uploadSuccess = true;
                } else {
                    $error_message = "文件上傳失敗，可能是網路連線問題或未選取檔案喔!: " . addslashes(mysqli_error($link));
                    echo "<script>
                    alert('更新失敗: " . $error_message . "');
                    setTimeout(function(){
                        window.location.href = 'editpet.php?pet_id=$pet_id';
                    }, 500);
                </script>";
                }
            } else {
                $error_message = "文件上傳失敗，可能是網路連線問題或未選取檔案喔!：{$file_name}";
                echo "<script>
                        alert('更新失敗: " . addslashes($error_message) . "');
                        setTimeout(function(){
                            window.location.href = 'editpet.php?pet_id=$pet_id';
                        }, 500);
                    </script>";
            }
        }
    }

    if ($uploadSuccess) {
        header("Location: editpet.php?pet_id=$pet_id");
        exit;
    } else {
        $error_message = "請您選擇檔案~!";
        echo "<script>
                alert('更新失敗: " . addslashes($error_message) . "');
                setTimeout(function(){
                    window.location.href = 'editpet.php?pet_id=$pet_id';
                }, 500);
            </script>";
    }
}

mysqli_close($link);
?>
