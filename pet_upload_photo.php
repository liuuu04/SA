<?php
$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

if (isset($_POST['pet_id'])) {
    $pet_id = $_POST['pet_id'];
    $uploadDirectory = 'photo/';

    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    $uploadSuccess = false;

    
    if (isset($_FILES['new_pet_photo']) && $_FILES['new_pet_photo']['error'] == UPLOAD_ERR_OK) {
        $coverPhotoName = basename($_FILES['new_pet_photo']['name']);
        $coverPhotoTmpName = $_FILES['new_pet_photo']['tmp_name'];
        $coverPhotoPath = $uploadDirectory . $coverPhotoName;

        if (move_uploaded_file($coverPhotoTmpName, $coverPhotoPath)) {
            $sqlUpdatePet = "UPDATE pet SET pet_photo = '$coverPhotoPath' WHERE pet_id = '$pet_id'";
            if (mysqli_query($link, $sqlUpdatePet)) {
                $uploadSuccess = true;
            } else {
                $error_message = "封面照片上傳失敗，可能是網路連線問題或未選取檔案，您可以在編輯寵物頁面更新寵物照片。: " . addslashes(mysqli_error($link));
                echo "<script>
                alert('上傳失敗: " . $error_message . "');
                setTimeout(function(){
                window.location.href = 'editpet.php?pet_id=$pet_id';
                }, 500);
                </script>";

            }
        } else {
            $error_message = "封面照片上傳失敗，可能是網路連線問題或未選取檔案，您可以在編輯寵物頁面更新寵物照片。：{$coverPhotoName}";
            echo "<script>
            alert('上傳失敗: " . addslashes($error_message) . "');
            setTimeout(function(){
            window.location.href = 'editpet.php?pet_id=$pet_id';
            }, 500);
            </script>";
        }
    }

    // 处理详细照片
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
                    $error_message = "詳細照片上傳失敗，可能是網路連線問題或未選取檔案，您可以在編輯寵物頁面更新寵物照片。: " . addslashes(mysqli_error($link));
                echo "<script>
                alert('上傳失敗: " . $error_message . "');
                setTimeout(function(){
                window.location.href = 'editpet.php?pet_id=$pet_id';
                }, 500);
                </script>";
                }
            } else {
                echo "文件上传失败：{$file_name}<br>";
                $error_message = "詳細照片上傳失敗，可能是網路連線問題或未選取檔案，您可以在編輯寵物頁面更新寵物照片。：{$file_name}";
            echo "<script>
            alert('上傳失敗: " . addslashes($error_message) . "');
            setTimeout(function(){
            window.location.href = 'editpet.php?pet_id=$pet_id';
            }, 500);
            </script>";
            }
        }
    }

    if ($uploadSuccess=='true') {
        header("Location: index.php");
        exit;
    } else {
        $error_message = "請您選擇檔案~!";
echo "<script>
        alert('更新失敗: " . addslashes($error_message) . "');
        setTimeout(function(){
            window.location.href = 'pet_post_photo.php?pet_id=$pet_id';
        }, 500);
    </script>";
    }
}

mysqli_close($link);
?>
