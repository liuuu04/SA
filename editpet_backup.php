<?php
session_start();
include('connection.php');
if (!isset($_SESSION['identify'])) {
    header("Location:login.php");
    exit();
}
$pet_gender = "";

if (isset($_GET['edit'])) {
    $pet_id = $_GET['edit'];
    $update = true;

    $record = mysqli_query($conn, "SELECT * FROM pet WHERE pet_id=$pet_id");

    if ($record->num_rows == 1) {
        $n = mysqli_fetch_array($record);
        
        $pet_name = $n['pet_name'];
        $pet_age = $n['pet_age'];
        $pet_gender = $n['pet_gender'];
        $pet_type = $n['pet_type'];
        $pet_variety = $n['pet_variety'];
        $pet_color = $n['pet_color'];
        $pet_size = $n['pet_size'];
        $pet_address = $n['pet_address'];
        $pet_character = $n['pet_character'];
        $pet_ligation = $n['pet_ligation'];
        $pet_medical = $n['pet_medical'];
        $pet_withkidpet = $n['pet_withkidpet'];
        $pet_heart = $n['pet_heart'];
        $pet_explain = $n['pet_explain'];
        $pet_publish = date("Y-m-d");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>您的寵物</title>
</head>
<body>
   
    <form method="POST" action="editpet_backend.php"> <!-- fetch to my backend code... -->
<div class="form-container">
        <label>Name</label>
        <input type="text" name="pet_name" value="<?php echo $pet_name; ?>"><br><br>

        
        <label>年龄</label>
        <input type="text" name="pet_age" value="<?php echo $pet_age; ?>"><br><br>

        <label>Gender</label>
        <input type="radio" name="pet_gender" value="公" <?php if ($pet_gender === "公") echo "checked"; ?>>公
        <input type="radio" name="pet_gender" value="母" <?php if ($pet_gender === "母") echo "checked"; ?>>母
        <br><br>
        <label>pet type</label>
        <input type="radio" name="pet_type" value="狗" <?php if ($pet_type === "狗") echo "checked"; ?>>狗
        <input type="radio" name="pet_type" value="貓" <?php if ($pet_type === "貓") echo "checked"; ?>>貓
        <br><br>
                     
        <label>pet variety</label>
        <input type="text" class="form-control" value="<?php echo $pet_variety; ?>" name="pet_variety"><br><br>
        <label>Pet fur colour</label>
        <input type="text" class="form-control" value="<?php echo $pet_color; ?>" name="pet_color"><br><br>
                      
        <label>pet size</label>
        <input type="text" class="form-control" value="<?php echo $pet_size; ?>" name="pet_size"><br><br>

        <label>pet address</label>
        <input type="text" name="pet_address" value="<?php echo $pet_address; ?>"><br><br>

        <label>pet character</label>
        <input type="text" class="form-control" value="<?php echo $pet_character; ?>" name="pet_character"required>
         <br><br>

        <label>pet ligation</label>
        <input type="text" name="pet_ligation" value="<?php echo $pet_ligation; ?>"><br><br>
        <label>pet medical</label>
        <input type="text" name="pet_medical" value="<?php echo $pet_medical; ?>"><br><br>


        <label for="">get along with children? 與小孩、寵物相處是否融洽</label>
       
        <input type="radio" name="pet_withkidpet" value="是" <?php if ($pet_withkidpet === "是") echo "checked"; ?>>是
        <input type="radio" name="pet_withkidpet" value="否" <?php if ($pet_withkidpet === "否") echo "checked"; ?>>否
        <input type="radio" name="pet_withkidpet" value="不清楚" <?php if ($pet_withkidpet === "不清楚") echo "checked"; ?>>不清楚
        <br><br>

    <label>是否需要簽署愛心認養切結書</label><br>
    <input type="radio" name="pet_heart" id="pet_heart_yes" value="1" <?php if ($pet_heart === "1") echo "checked"; ?>>是，需要簽署愛心認養切結書<br>
    <input type="radio" name="pet_heart" id="pet_heart_no" value="0" <?php if ($pet_heart === "0") echo "checked"; ?>>否，不需要簽署愛心認養切結書<br><br>

    <label>寵物照片</label><br>
    <input type="file" name="pet_photo" id="pet_photo" accept="image/jpeg, image/jpg">
    <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 400px; max-height: 400px;"><br><br>
    <script>
        document.getElementById('pet_photo').addEventListener('change', function(event) {
            var file = event.target.files[0];
            var imagePreview = document.getElementById('imagePreview');

            var reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block'; 
            }
            reader.readAsDataURL(file);
        });
    </script>
        


                
    <label>additional description about pet: </label><br>
    <textarea class="form-control" name="pet_explain" rows="4" cols="50"><?php echo $pet_explain; ?></textarea><br><br>
   
        <!-- Add a hidden field to store the pet_id -->
        <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>"><br><br>
        
        <button type="submit" name="update">Update</button>
        
        
    </form>
</body>
</html>
</div>


<style>
      .form-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
</style>
