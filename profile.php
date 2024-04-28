<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="stylesignup.css" />
</head>
<body>
<?php
require('connection.php');
if (isset($_POST['identify'], $_POST['motivation'], $_POST['job'], $_POST['economic'], $_POST['family_kid'], $_POST['family_cat'], $_POST['family_dog'], $_POST['family_other'], $_POST['family_roomate'], $_POST['experience'])) {
    $economic = $_POST['economic'];
    $identify = $_POST['identify'];
    $job = $_POST['job'];
    $family_kid = $_POST['family_kid'];
    $family_cat = $_POST['family_cat'];
    $family_dog = $_POST['family_dog'];
    $family_other = $_POST['family_other'];
    $family_roomate = $_POST['family_roomate'];
    $experience = $_POST['experience'];
    $motivation = $_POST['motivation'];
    
    



   
    $query = "INSERT INTO `profile` (`identify`, `motivation`, `economic`, `job`, `family_kid`, `family_cat`, `family_dog`, `family_other`, `family_roommate`, `experience`) 
                             VALUES ('$identify', '$motivation', '$economic', '$job', '$family_kid', '$family_cat', '$family_dog', '$family_other', '$family_roomate', '$experience')";
    $result1 = mysqli_query($conn, $query);

    $query_update_account = "UPDATE `account` SET `identify_level` = 'adopter' WHERE `identify` = '$identify'";
    $result_update_account = mysqli_query($conn, $query_update_account);


    if ($result1) {
        echo "<div class='form'>
        <h3>You are registered successfully.</h3>
        <br/>Click here to start <a href='index.php'>Login</a></div>";
    } else {
        echo "Error: " . mysqli_error($conn); // Display error message if query fails
    }

    $conn->close();
} else {


?>

<div id="form">
<h1 id="heading">使用者個人檔案</h1>
<form name="form" action="" method="post">

<label>帳戶名稱:</label><br>
<input type="text" name="identify" placeholder="請輸入帳戶名稱" required/><br><br>

<label for="message">領養動機:</label><br>
<textarea type= "message" id="message" name="motivation" rows="4" cols="50"placeholder="請在這裡輸入您的領養動機..." required>
</textarea><br><br>

<label>使用者職業:</label><br>
<input type="text" name="job" placeholder="使用者職業" required/><br><br>


<label>使用者財務狀況:</label><br>
<input type="radio" id="dependent" name="economic" value="dependent" required>
<label for="dependent">依賴財務</label>
<input type="radio" id="half dependent" name="economic" value="half dependent" required>
<label for="half dependent">部分依賴</label>
<input type="radio" id="fully independent" name="economic" value="fully independent" required>
<label for="fully independent">完全獨立</label><br><br>




<label for="family_kid">家庭中的孩子数量：</label><br>
  <select  id="family_kid" name="family_kid">
    <option value="0"></option>
    <option value="1">1 位</option>
    <option value="2">2 位</option>
    <option value="3">3 位</option>
    <option value="4">4 位</option>
    <option value="5">5次或更多</option>
    </select> <br> <br>

  <label for="family_roomate">家庭成員-(小孩): </label><br>
  <select id="family_roomate" name="family_roomate">
  <option value="0"></option>
    <option value="1">1 位</option>
    <option value="2">2 位</option>
    <option value="3">3 位</option>
    <option value="4">4 位</option>
    <option value="5">5次或更多</option>
  </select> <br><br>

  <label for="family_dog">狗的數量： </label><br>
  <select id="family_dog" name="family_dog">
  <option value="0"></option>
    <option value="1">1 隻</option>
    <option value="2">2 隻</option>
    <option value="3">3 隻</option>
    <option value="4">4 隻</option>
    <option value="5">5次或更多</option>
  </select> <br><br>

  <label for="family_cat">貓的數量：</label><br>
  <select id="family_cat" name="family_cat">
  <option value="0"></option>
    <option value="1">1 隻</option>
    <option value="2">2 隻</option>
    <option value="3">3 隻</option>
    <option value="4">4 隻</option>
    <option value="5">5次或更多</option>
  </select> <br><br>

  <label for="family_other">其他動物的數量： </label><br>
  <select id="family_other" name="family_other">
    <option value="0"></option>
    <option value="1">1 隻</option>
    <option value="2">2 隻</option>
    <option value="3">3 隻</option>
    <option value="4">4 隻</option>
    <option value="5">5次或更多</option>
  </select> <br><br>

  <label for="experience">收養經驗: </label><br>
  <select id="experience" name="experience">
    <option value="0"></option>
    <option value="1">1次 </option>
    <option value="2">2次</option>
    <option value="3">3次或更多</option>
  </select> <br><br>

  <input type="submit" id="btn" name="submit" value="註冊" />

</form>


<?php } ?>

</body>
</html>
