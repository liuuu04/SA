<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>看已刊登的寵物</title>
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

    <div class="under">
    <h2 style="margin-left: 200px;"><i class="fas fa-paw mr-2"></i> 已刊登的寵物</h2>
       <div class="contain">
       
    <?php
  
      $link=mysqli_connect('localhost','root','han20000914','sa');
     
      $sql = "SELECT pet_id, pet_name, pet_type, pet_publish, pet_variety, pet_gender, pet_age, pet_address, pet_explain, pet_photo ,pet_level From pet where
      pet.identify='{$_SESSION['identify']}'";
      $result=mysqli_query($link,$sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
             $pet_photo=$row['pet_photo'];
             $pet_level=$row['pet_level'];
            ?>
    
		<div class="petframe">
		  <div class="petphoto">
        <?php echo "<img src='{$pet_photo}' alt='{$introduce}'><br>" ?>
	  
		  </div>
		  <div class="petintro">
			 <span><?php echo $row['pet_name']; ?></span><p style="display: inline;"><?php echo $row['pet_publish']; ?></p>

			 <p><img src="images/pets (2).png"> <img src="images/pets.png"><?php echo $row['pet_type'];?>/<?php echo $row['pet_variety'];?></p>
			 <p><img src="images/genders.png"> <?php echo $row['pet_gender'];?></p>
			 <p><img src="images/age.png"> <?php echo $row['pet_age'];?>歲</p>
			 <p><img src="images/location.png"> <?php echo $row['pet_address'];?></p>
			 <p><img src="images/comment.png"> <?php echo $row['pet_explain'];?></p>

             <?php if($pet_level=='in_progress'){?>
			 <a href="editpet.php?pet_id=<?php echo $row['pet_id']; ?>" style="background-color:#A0E548;color:#fff;"> 編輯</a>
             <?php } ?>

             <?php if($pet_level=='endprogress'){
                echo "<p>寵物已被送養</p>";
             }?>
             <a href="deletepet.php?pet_id=<?php echo $row['pet_id']; ?>" style="background-color: #E45F2B;color:#fff;"> 刪除</a>
		

		  </div>
		</div>

    <?php
    }
}else{
    echo"還沒有刊登的寵物!";
}
mysqli_close($link);
?>
</div>
</div>
</body>
</html>