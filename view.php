<?php
session_start();
// Include database connection file
include('connection.php');
if (!isset($_SESSION['identify'])) {
    header("Location:login.php");
    exit();
}
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>個人資料</title>
        <link rel="stylesheet" href="stylesignup.css" />
        
    </head>

       <body>
   
       <div class='profile'>
       
        <?php if ($_SESSION['identify_level'] == 'member' || $_SESSION['identify_level'] == 'adopter') { ?>
        
        <p>一般個人資料</p>
        <label>姓名: </label>
        <span><?php echo ucwords($_SESSION['name']); ?></span><br>
        <label>電子郵件:</label>
        <span><?php echo ucwords($_SESSION['email']); ?></span><br>
        <label>出生日期: </label>
        <span><?php echo ucwords($_SESSION['birth']); ?></span><br>
        <label>性別:</label>
        <span><?php echo ucwords($_SESSION['gender']); ?></span><br>
       <label>電話號碼:</label>
        <span><?php echo ucwords($_SESSION['identify_phone']); ?></span><br>


        

  <?php } ?>
  
    <?php if ($_SESSION['identify_level'] == "adopter")?>
	<?php
	$identify = $_SESSION['identify'];

	$query = "SELECT * FROM profile WHERE identify = '$identify'";
    $result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
           
            echo "<p>領養人個人資料</p>";
            echo "<label>帳號名稱：</label><span>" .  ucwords($row['identify']) . "</span><br>";
            echo "<label>領養動機：</label><span>" . $row['motivation'] . "</span><br>";
            echo "<label>使用者職業：</label><span>" . $row['job'] . "</span><br>";
            echo "<label>財務狀況：月收入狀況約</label><span>" . $row['economic'] . "</span><br>";
            echo "<label>家庭成員-(同住者)：</label><span>" . $row['family_roommate'] . "位</span><br>";
            echo "<label>家庭成員數量（小孩）：</label><span>" . $row['family_kid'] . "位</span><br>";
            echo "<label>狗的數量：</label><span>" . $row['family_dog'] . "隻</span><br>";
            echo "<label>貓的數量：</label><span>" . $row['family_cat'] . "隻</span><br>";
            echo "<label>其他動物的數量：</label><span>" . $row['family_other'] . "隻</span><br>";
            echo "<label>收養經驗：</label><span>" . $row['experience'] . "次</span><br>";
           
        }
    }
    ?> 
    <div id="logoutContainer">
        <?php if ($_SESSION['identify_level'] == 'member') { ?>
            <br>
            <a href="profile.php" id="buttonya">前往填寫領養人表單</a><br><br>

            <?php } ?>
            <a href="index.php" id="buttonya">返回到首頁</a>
            <a href="logout.php" id="buttonya">登出</a>
        </div>
  
  </div>
</body>
<h2></h2>

    <style>
        body {
        background: url("images/bgpet.png") no-repeat center center fixed;
          background-size: cover;
          font-family: Arial, sans-serif;
        
        }
        #logoutContainer {
        
        text-align: right;
        display: flex;
        justify-content: flex-end;
        }
            table {
            width: 50%;
            border-collapse: collapse;
        }
            label {
        color: #000;
        font-weight: 600;
        display: inline-block;
        width: 150px; 
        text-align: center; 
        padding-right: 50px; 
        line-height: 34px;
        background-color: #DBD2C9;
          padding: 5px;
         margin-bottom: 10px;
          border-radius: 30px;
          transition: background-color 0.3s ease;
          

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
        
        .profile {
        margin-top: 300px;
        border: none;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #f9f9f9;width: 50%; /* Adjusted width */
        border-radius: 8px;
        margin: 80px auto; 
        padding: 40px; 
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Soft shadow */
        }


        #buttonya{
            color: #000;
          font-weight: 600;
          background-color: #f5f5dc;
          padding: 10px 20px 10px 20px;
          font-size: 16px;
          border-radius: 30px;
          border: none;
          transition: background-color 0.3s ease;
          border: none;
          text-decoration: none;
          margin-right: 5px;
        }


       











        

    </style>


</html>