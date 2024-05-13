<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="new1.css">

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
        background-color: #f1f1f1;
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

   #upheart{
    padding: 8px 10px;
    color: #fff;
    background-color: #db0000;
    margin-left: 10px;
    font-size: 15px;
    font-weight: 550;
    border-radius: 2px;
    
   }

   .upheart:hover{
    color: #000;
   }
   </style>
  </head>
  <body>
  <?php
    $pet_id=$_GET['pet_id'];
    $link=mysqli_connect('localhost','root','han20000914','sa');
    $sql="select * from pet where pet_id='$pet_id'";
    $result=mysqli_query($link,$sql);
    if($row=mysqli_fetch_assoc($result))
    {
        $pet_name=$row['pet_name'];
        $pet_age=$row['pet_age'];
        $pet_character=$row['pet_character'];
        $pet_medical=$row['pet_medical'];
        $pet_type=$row['pet_type'];
        $pet_variety=$row['pet_variety'];
        $pet_color=$row['pet_color'];
        $pet_gender=$row['pet_gender'];
        $pet_size=$row['pet_size'];
        $pet_address=$row['pet_address'];
        $pet_ligation=$row['pet_ligation'];
        $pet_publish=$row['pet_publish'];
        $pet_withkidpet=$row['pet_withkidpet'];
        $pet_heart=$row['pet_heart'];
        $pet_photo=$row['pet_photo'];
        $pet_explain=$row['pet_explain'];
        $identify=$row['identify'];

    }
    mysqli_close($link);
    ?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>寵物領養平台</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">首頁</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">寵物知識專區</a></li>
	        	<li class="nav-item"><a href="vet.html" class="nav-link">討論區</a></li>
	        	
	        </ul>
	      </div>
	    </div>
      <div class="dropdown">
        <?php  session_start(); ?>
          <button class="intromy"><a href="#"><img src="<?php echo $_SESSION['identify_photo']; ?>" style="border-radius: 50%;"><span><?php echo $_SESSION['name'];?></span></a></button>
            <div class="dropdown-content" id="intromyDropdown">
                <a href="view.php">查看個人檔案</a>
                <a href="pet_post.php">刊登寵物</a>
                <a href="viewpet.php">查看已刊登的寵物</a>
                <a href="viewheart.php">查看誰申請了愛心切結書</a>
                <a href="heart.pdf" target="_blank">下載愛心認養切結書</a>
                <a href="logout.php">登出</a>
            </div>
        </div>
	  </nav>
    <!-- END nav -->
    
   
    <section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">
      <div class="col-md-5 d-flex">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0">
          <div class="carouselmy2">
            <ul>
        <?php echo "<img src='{$pet_photo}' alt='{$introduce}'><br>" ?>
            </ul>
          </div>
          
        </div>
      </div>

      <div class="col-md-7 pl-md-5 py-md-5">
        <div class="heading-section pt-md-5">
          <h2 class="mb-4"><?php echo $pet_name; ?></h2>
        </div>
        <div class="row">
         
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/pets (1).png"></div>
            <div class="text pl-3">
              <h4>種類</h4>
              <p><?php echo $pet_type; ?></p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/pets (1).png"></div>
            <div class="text pl-3">
              <h4>品種</h4>
              <p><?php echo $pet_variety; ?></p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/genders.png"></div>
            <div class="text pl-3">
              <h4>性別</h4>
              <p><?php echo $pet_gender; ?></p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-50 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/age.png"></div>
            <div class="text pl-3">
              <h4>年齡</h4>
              <p><?php echo $pet_age; ?>歲</p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/pet.png"></div>
            <div class="text pl-3">
              <h4>體型</h4>
              <p><?php echo $pet_size; ?></p>
            </div>
          </div>

          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/pet.png"></div>
            <div class="text pl-3">
              <h4>毛色</h4>
              <p><?php echo $pet_color; ?></p>
            </div>
          </div>

          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/syringe.png"></span></div>
            <div class="text pl-3">
              <h4>病史</h4>
              <p><?php echo $pet_medical; ?></p>
            </div>
          </div>

          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/doctor.png"></span></div>
            <div class="text pl-3">
              <h4>是否結紮</h4>
              <p><?php echo $pet_ligation; ?></p>
            </div>
          </div>

          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/location.png"></span></div>
            <div class="text pl-3">
              <h4>縣市</h4>
              <p><?php echo $pet_address; ?></p>
            </div>
          </div>

          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><img src="images/heart.png"></span></div>
            <div class="text pl-3">
              <h4>是否需要愛心切結書</h4>
              <p><?php echo $pet_heart; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row mb-5 pb-5">
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<img src="images/owner.png">
              </div>
              <div class="media-body p-4">
                <h3 class="heading">小花的個性是?</h3>
                <p><?php echo $pet_character; ?></p>
                <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<img src="images/boy.png">
              </div>
              <div class="media-body p-4">
                <h3 class="heading">和家庭成員的相處狀況?</h3>
                <p><?php echo $pet_withkidpet; ?></p>
                
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<img src="images/comments.png">
              </div>
              <div class="media-body p-4">
                <h3 class="heading">送養人的一些敘述</h3>
                <p><?php echo $pet_explain; ?></p>
                
              </div>
            </div>      
          </div>
        </div>
       
        <div class="col-md-8 d-flex align-self-stretch px-4 ftco-animate" style="margin-left: 190px;">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<img src="images/syringe.png">
              </div>
              <div class="media-body p-4">
                <h3 class="heading">詳細病史(依時間順序排列)</h3>
               <?php $link=mysqli_connect('localhost','root','han20000914','sa');
                    $sql3="select * from pet_medical where pet_id='$pet_id' ORDER BY medical_id";
                    $result=mysqli_query($link,$sql3);
                    if(mysqli_num_rows($result) > 0) {
                      while ($row=mysqli_fetch_assoc($result)) {
                          $medical_content=$row['medical_content'];
                          echo '<p>' . $medical_content . '</p>';
                      }
                  } else {
                      echo "這隻寵物目前還沒有病史";
                  }
                  
                  mysqli_close($link);
                  ?>
                
              </div>
            </div>      
          </div>
        </div>
        <br><br>
        
        <?php 
        if($_SESSION['identify_level']=='adopter'){
        $link=mysqli_connect('localhost','root','han20000914','sa');
        mysqli_set_charset($link,"utf8");
        $sql1 = "SELECT * FROM account WHERE identify = '$identify'";
        $result= mysqli_query($link,$sql1);
        if($row=mysqli_fetch_assoc($result)){
                $name=$row['name'];
            } 
            ?>
        <div class="chatuser" style="margin-left: 190px">
          <span><img src="images/chat (1).png"> 聯絡送養人</span> 
          <?php if($pet_heart=='是'){ ?>
          <a href="upheart.php?pet_id=<?php echo $pet_id; ?>" id="upheart"><i class="fas fa-heart mr-2"></i> 上傳領養此寵物的愛心切結書</a>
          <?php }?>
          <br><br><br>
          <p><img src="images/owner.png"> 送養人: <a href="#" style="color: #5579c6;"><?php echo $name; ?></a></p>
          
          <p><img src="images/send.png"> 傳送訊息: <a href="#" id="sendMessageLink" style="color: #5579c6;"><?php echo $name; ?></a></p>

          <br><br>愛心切結書可至導覽列下載使用!如果送養者未設定切結書需求，則無須填寫、上傳。
        </div> 
        

<?php } ?>

<?php if($_SESSION['identify_level']=='member'){?>
         
         <div class="chatnotify">
           有心儀的寵物嗎?填寫完領養人資料表單後，可以與送養者進行聯絡喔!<br><br>
           <a href="profile.php">前往填寫</a>
         </div>

   <?php } ?>
</section>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/myscript.js"></script>
  <!-- HTML 部分 -->

  <script>
  document.getElementById("sendMessageLink").addEventListener("click", function(event) {
      event.preventDefault(); 
      var receiverName = "<?php echo $name; ?>";

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "send_message.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
              if (xhr.status === 200) {
       
                  alert(xhr.responseText);
              } else {
          
                  alert("Error: " + xhr.statusText);
              }
          }
      };
      xhr.send("receiver_name=" + encodeURIComponent(receiverName)); 
  });
  </script>


<style>
  .chatnotify{
    padding: 20px;
    width: 600px;
    background-color: #f8f9fd;
    color: #000;
    font-size: 18px;
    font-weight: 550;
    margin-left: 450px;
  }

  .chatnotify a{
    padding: 8px 10px;
    color: #000;
    background-color: #f5f5dc;
    margin-left: 220px;
  }
</style>
    
  </body>
</html>