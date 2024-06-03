<?php
session_start();
include('connection.php');
if (!isset($_SESSION['identify'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
$pet_id=$_GET['pet_id'];
$identify = $_SESSION['identify'];

include('connection.php');
$sql = "SELECT pet.*, account.name AS sender_name 
FROM pet 
INNER JOIN account ON pet.identify = account.identify 
WHERE pet.pet_id = '$pet_id'";
   $result=mysqli_query($conn,$sql);
   if ($row = mysqli_fetch_assoc($result)) {
    $pet_name = $row['pet_name'];
    $pet_photo = $row['pet_photo'];
    $reportedidentify = $row['identify'];
    $sender_name = $row['sender_name'];
}
else {
  
    echo "Error: Pet not found.";
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>檢舉</title>
          <style>
         body {
              background: url("images/bgpet.png") no-repeat center center fixed;
                background-size: cover;
                font-family: Arial, sans-serif;
              }
          .card {
              max-width: 600px;
              margin: 0 auto;
              background-color: #fff;
              border-radius: 10px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
              margin-top:200px;
              padding: 10px;
          }
          h1 {
              text-align: center;
          }
          label,p {
              font-weight: bold;
          }
          .right {
          background-color: #e0e0e0;
          }
          .pet-photo img {
              max-width: 100%;
              height: auto;
              margin-bottom: 10px;
              border-radius: 5px;
          }
          .styled-button {
              display: block;
              width: 150px;
              margin: 0 auto;
              padding: 10px;
              text-align: center;
              background-color: #ff6347;
              color: #fff;
              text-decoration: none;
              border-radius: 5px;
          }
          .styled-button:hover {
              background-color: #aa6347;
          }
          
          .form-left {
              flex: 1;
          }
          .form-right {
              flex: 1;
              margin-left: 20px; 
          }
          .form-flex-container {
              display: flex;
              justify-content: space-between;
          }
          .logout {
              
              text-align: right;
              display: flex;
              justify-content: flex-end;
              }
          
       .label {
              color: #000;
              font-weight: 600;
              display: inline-block;
              width: 200px; 
              text-align: center; 
              padding-right: 50px; 
              line-height: 34px;
              background-color: #DBD2C9;
                padding: 3px;
               margin-bottom: 10px;
                border-radius: 10px;
                transition: background-color 0.3s ease;
          }
          .labelcheck {
          color: #000;
          font-weight: 600;
          display: block;
          width: 550px;
          padding: 20px; /* Increased padding for better spacing */
          margin-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 10px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Added box shadow for depth */
          transition: box-shadow 0.3s ease, transform 0.3s ease;
      }
      
          input[type="text"] {
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          transition: border-color 0.3s ease;
      }
      
      input[type="text"]:read-only {
          background-color: #f2f2f2; 
      }
      
      
             
              
          
              
      input[type="checkbox"] {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          appearance: none;
          width: 20px;
          height: 20px;
          border: 2px solid #ccc;
          border-radius: 4px;
          margin: 0;
          cursor: pointer;
      }
      input[type="checkbox"]:checked {
          background-color: #ff6347;
          border-color:#aa6347;
      }
      .checkbox-container {
          display: flex;
          flex-direction: row;
          justify-content: space-between;
      }
      #logout {
          float: right;
          margin-left: 100px;
         
      }
</style>
    </head>
    
    <body>
<div class="card">
<a href="logout.php" id="logout" class="styled-button">Hi, <?php echo ucwords($_SESSION['name']); ?> Log out</a><br>
        <h1>檢舉</h1>
        <h4>以下是報告此帖子的原因：</h4>
        <h4>您的報告是匿名的，除了您在報告知識產權侵權。如果有人有立即的危險，請撥打當地的緊急服務電話 - 不要等待。</h4>
      
        
       
    
        
        <form action="reportbackend.php?pet_id=<?php echo $pet_id; ?>" method="POST" enctype="multipart/form-data" name="form">
      
       <div class="pet-photo">
            <?php echo "<img src='{$pet_photo}'>" ?>
        </div>
        
            <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>">
            <input type="hidden" name="identify" value="<?php echo $identify; ?>">

            <div class="labelcheck">
            <label class="label">你舉報了這個人</label></span>

            <input type="text" value="<?php echo $sender_name?>" name="sender_name" readonly><br>
            
            <input type="text" value="<?php echo $reportedidentify?>" name="reportedidentify" hidden><br>
            
            <label class="label">想領養的寵物:</label>
            <input type="text" name="pet_name" value="<?php echo $pet_name?>" readonly><br>
           
            <br>
            
            <label class="label" for="reportedcontent">為什麼你要舉報這個內容？</label><br> 
            <input type="checkbox" name="content[]" value="不喜欢">
            <label>不喜欢</label><br>
            
            <input type="checkbox"  name="content[]" value="仇恨言論或符號">
            <label>仇恨言論或符號</label><br>

            <input type="checkbox"  name="content[]" value="性虐待">
            <label>性虐待</label><br>

            <input type="checkbox"  name="content[]" value="詐騙或欺詐">
            <label>詐騙或欺詐</label><br>
            <input type="checkbox" name="content[]" value="這是垃圾郵件">
            <label>這是垃圾郵件</label><br>

            <input type="checkbox"  name="content[]" value="暴力">
            <label>暴力</label><br>

            <input type="checkbox"  name="content[]" value="假新聞">
            <label>假新聞</label><br><br>

            <label class="label" for="comment">評論:</label>
            <input type="text" id="comment" name="comment"><br><br>
           
            <input class="styled-button" type="submit" value="提交">
            </div>
          
            
        </form>

</body>
</html>
