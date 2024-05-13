<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>愛心切結書申請</title>
    <link rel="stylesheet" href="new2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
    .dropdown {
        position: relative;
        display: inline-block;
        
        
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right:20px;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 15px;
        
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #000;
        border-radius: 15px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .intromy{
    border-radius: 30px;
    padding: 13px 25px 13px 25px;
    background-color: #f8f9fd;
    margin-right: 20px;
    border: #fff;
   }
   </style>
</head>
<body>
<nav class="navbar">
        <div class="topp">
        <p><i class="fas fa-paw mr-2"></i> 寵物領養平台</p>
    
         <div id="aaa">
         <a href="index.php">首頁</a>
         <a href="mg_active.html">寵物知識</a>
         <a href="#">討論區</a>
         <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
         <div class="dropdown">
        <?php  session_start(); ?>
          <button class="intromy"><img src="<?php echo $_SESSION['identify_photo']; ?>" style="border-radius: 50%;"><span><?php echo $_SESSION['name'];?></span></button>
            <div class="dropdown-content" id="intromyDropdown">
                <a href="view.php">查看個人檔案</a>
                <a href="pet_post.php">刊登寵物</a>
                <a href="viewpet.php">查看已刊登的寵物</a>
                <a href="viewheart.php">查看誰申請了愛心切結書</a>
                <a href="heart.pdf" target="_blank">下載愛心認養切結書</a>
                
            </div>
        </div>
         </div>
        
        </div>
       </nav>
<?php
   $pet_id=$_GET['pet_id'];
   $identify=$_SESSION['identify'];
   $name=$_SESSION['name'];
  
   
   $link=mysqli_connect('localhost','root','han20000914','sa');
   mysqli_set_charset($link,"utf8");
   $sql1="select * from profile where identify='$identify'";
   $result=mysqli_query($link,$sql1);
   if($row=mysqli_fetch_assoc($result))
   {
    
    $motivation=$row['motivation'];
    $job=$row['job'];
    $economic=$row['economic'];

}
   

   $link=mysqli_connect('localhost','root','han20000914','sa');
   $sql="select * from pet where pet_id='$pet_id'";
   $result=mysqli_query($link,$sql);
   if($row=mysqli_fetch_assoc($result))
   {
    $pet_name=$row['pet_name'];
    $pet_photo=$row['pet_photo'];
    }

?>
   <div class="gridd">

    <div id="left">
    <h1 style="margin-left:80px;">上傳領養寵物的愛心切結書</h1>
    <h5 style="margin-left: 80px;">請確認個人相關資訊是否正確且欲申請領養的寵物內容正確</h5>
    <?php echo "<img src='{$pet_photo}' alt=' '><br>" ?>
    </div>

    <div id="right">
    
       <form action="upheart2.php" enctype="multipart/form-data" method="POST">
       <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>">
       <input type="hidden" name="identify" value="<?php echo $identify; ?>">
       <div id="bbb">
        <p>領養人姓名:</p><input type="text" value="<?php echo $name?>" name="name" readonly>
</div>




       

        <div id="bbb">
        <p>想領養的寵物:</p><input type="text" name="pet_name" value="<?php echo $pet_name?>" readonly>
        </div>

        <div id="bbb">
        <p>上傳檔案:</p><input type="file" name="file">
        </div>
        
        <input type="submit" id="buttonna" value="上傳">
       </form>
     
    </div>

	</div>

    






</body>
</html>