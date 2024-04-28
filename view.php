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
       <div id="logoutContainer">
        <a href="logout.php">Hi, <?php echo ucwords($_SESSION['name']); ?> Log out</a>
        </div>
        <?php if ($_SESSION['identify_level'] == 'member' || $_SESSION['identify_level'] == 'adopter') { ?>
        
        <p>個人資料</p>
        <label>姓名: </label>
        <span><?php echo ucwords($_SESSION['name']); ?></span><br>
        <label>輸入電子郵件:</label>
        <span><?php echo ucwords($_SESSION['email']); ?></span><br>
        <label>輸入出生日期: </label>
        <span><?php echo ucwords($_SESSION['birth']); ?></span><br>
        <label>輸入性別:</label>
        <span><?php echo ucwords($_SESSION['gender']); ?></span><br>
       <label >輸入電話號碼:</label>
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
            echo "<label>帳戶名稱：</label><span>" .  ucwords($row['identify']) . "</span><br>";
            echo "<label>領養動機：</label><span>" . $row['motivation'] . "</span><br>";
            echo "<label>使用者職業：</label><span>" . $row['job'] . "</span><br>";
            echo "<label>財務狀況：</label><span>" . $row['economic'] . "</span><br>";
            echo "<label>家庭中的孩子數量：</label><span>" . $row['family_kid'] . "</span><br>";
            echo "<label>家庭成員數量（小孩）：</label><span>" . $row['family_roommate'] . "</span><br>";
            echo "<label>狗的數量：</label><span>" . $row['family_dog'] . "</span><br>";
            echo "<label>貓的數量：</label><span>" . $row['family_cat'] . "</span><br>";
            echo "<label>其他動物的數量：</label><span>" . $row['family_other'] . "</span><br>";
            echo "<label>收養經驗：</label><span>" . $row['experience'] . "</span><br>";
           
        }
    }
    ?> 
    <br><a href="index.php">go back to index</a>
  
  </div>
</body>
<h2></h2>

    <style>
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
        display: inline-block; /* Ensure label and span appear side by side */
        width: 200px; /* Adjust width as needed for question */
        text-align: left; /* Align label text to the right for question-like appearance */
        padding-right: 30px; /* Add some spacing between label and span */
        font-weight: 500;
        line-height: 34px;
    }
        span {
            padding: 8px;

            border-radius: 4px; /* Rounded corners for an elegant look */
        }
        
        p{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 19px;
            font-weight: 500;
        }
        
        .profile {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #f9f9f9;width: 50%; /* Adjusted width */
        border-radius: 8px;
        margin: 80px auto; 
        padding: 40px; 
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Soft shadow */
        }

    </style>


</html>