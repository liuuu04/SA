<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_id = $_POST["pet_id"];
    
 
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["new_pet_photo"]["name"]);
    move_uploaded_file($_FILES["new_pet_photo"]["tmp_name"], $target_file);
    
    
    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
    $new_photo_path = mysqli_real_escape_string($link, $target_file);
    
    $update_sql = "UPDATE pet SET pet_photo='$new_photo_path' WHERE pet_id='$pet_id'";
    mysqli_query($link, $update_sql);
    mysqli_close($link);

    
    echo "<script>
    alert('寵物照片已成功更新!');
    setTimeout(function(){
        window.location.href = 'editpet.php?pet_id=$pet_id';
    }, 500); // 
  </script>";
}
?>
