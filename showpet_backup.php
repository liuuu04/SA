<?php
session_start();
include('connection.php');
if (!isset($_SESSION['identify'])) {
    header("Location:login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $identify = $_SESSION['identify'];

        
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $update = true;

            $record = mysqli_query($conn, "SELECT * FROM pet WHERE pet_id=$pet_id");

            if ($record->num_rows == 1 ) {
                    $n = mysqli_fetch_array($record);
                    $pet_name = $n['pet_name'];
                    $pet_age = $n['pet_age'];
                    $pet_name = $n['pet_name'];
                    $pet_age = $n['pet_age'];
                    $pet_gender=$n['pet_gender'];
                    $pet_type=$n['pet_type'];
                    $pet_variety=$n['pet_variety'];
                    $pet_color=$n['pet_color'];
                    $pet_size=$n['pet_size'];
                    $pet_address=$n['pet_address'];
                    $pet_character = $n['pet_character'];
                    $pet_ligation=$n['pet_ligation'];
                    $pet_medical=$n['pet_medical'];
                    $pet_withkidpet=$n['pet_withkidpet'];
                    $pet_heart=$n['pet_heart'];
                    $pet_explain=$n['pet_explain'];
                    $pet_publish = date("Y-m-d");
            }
        }

    ?>

<h1>您的寵物</h1>

<div class="form-container">
<?php
	$identify = $_SESSION['identify'];

	$query = "SELECT * FROM pet WHERE identify = '$identify'";
    $result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?> 
        
        <label>送養人</label><span><?php echo $row['identify']; ?></span><br>
        
        <label>名稱</label><span><?php echo $row['pet_name']; ?></span><br>
        <label>型態</label><span><?php echo $row['pet_type']; ?></span><br>
        

        <label>編號</label><span><?php echo $row['pet_id']; ?></span><br>
        <label>名稱</label><span><?php echo $row['pet_name']; ?></span><br>
        <label>年齡</label><span><?php echo $row['pet_age']; ?></span><br>
        <label>個性</label><span><?php echo $row['pet_character']; ?></span><br>
        <label>病史</label><span><?php echo $row['pet_medical']; ?></span><br>
 
        <label>編號</label><span><?php echo $row['pet_id']; ?></span><br>
        <label>種類</label><span><?php echo $row['pet_type']; ?></span><br>
        <label>品種</label><span><?php echo $row['pet_variety']; ?></span><br>
        <label>毛色</label><span><?php echo $row['pet_color']; ?></span><br>
        <label>性別</label><span><?php echo $row['pet_gender']; ?></span><br>
        
        
        <label>編號</label><span><?php echo $row['pet_id']; ?></span><br>
        <label>體型</label><span><?php echo $row['pet_size']; ?></span><br>
        <label>縣市</label><span><?php echo $row['pet_address']; ?></span><br>
        <label>結紮與否</label><span><?php echo $row['pet_ligation']; ?></span><br>
        <label>刊登日期</label><span><?php echo $row['pet_publish']; ?></span><br>
        <label>pet explain</label><span><?php echo $row['pet_explain']; ?></span><br>

        <label>編號</label><span><?php echo $row['pet_id']; ?></span><br>
        <label>與小孩、其他寵物相處是否融洽</label><span><?php echo $row['pet_withkidpet']; ?></span><br>
        <label>是否簽署愛心認養切結書</label>
        <span> <?php
        $petHeartValue = $row['pet_heart']; 
        if ($petHeartValue == 1) {
            echo "是";
        } else {
            echo "不";
        }
        ?></span><br>
        


        <label>寵物照片</label><span id="fetchphoto"><?php echo $row['pet_photo']; ?></span><br>

        
        <label>寵物說明欄</label><span><?php echo $row['pet_explain']; ?></span><br>

        <a href="editpet.php?edit=<?php echo $row['pet_id']; ?>" class="editbtn" >Edit</a><br>
        <a href="delete.php?pet_id=<?php echo $row["pet_id"]; ?>" class="deletebtn" >Delete</a><br><br>

    <?php }} ?> 
    </div>
    
</body>
</html>


<style>
    label {
        color: #000;
        font-weight: 600;
        display: inline-block;
        width: 150px; 
        text-align: center; 
        padding-right: 50px; 
        line-height: 34px;
    }
        
    .editbtn {
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
        .deletebtn {
            background-color: #FF0000; 
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
          
        .form-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        
        span {
            padding: 8px;
            margin-left: 50px;
        }
        
        p{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 19px;
            font-weight: 600;
        }
    .container{
        
    }
        

</style>
