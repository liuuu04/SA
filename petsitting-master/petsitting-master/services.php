<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/newcss.css">
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
	        	<li class="nav-item"><a href="index.html" class="nav-link">首頁</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">寵物知識專區</a></li>
	        	<li class="nav-item"><a href="vet.html" class="nav-link">討論區</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">寵物展</a></li>
	        </ul>
	      </div>
	    </div>
      <button class="intromy"><a href="#"><img src="images/owner.png"><span>User1</span></a></button>
	  </nav>
    <!-- END nav -->

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-5 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0">
             
              <div class="carouselmy2">
                <ul>
                  <li><img src="images/image_3.jpg" alt="Image 1"></li>
                  <li><img src="images/image_2.jpg" alt="Image 2"></li>
                  <li><img src="images/image_3.jpg" alt="Image 3"></li>
                </ul>
              </div>
              <button class="prev" onclick="prevSlide()">&#10094;</button>
              <button class="next" onclick="nextSlide()">&#10095;</button>
              
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
	    						<h4>種類/品種</h4>
	    						<p><?php echo $type; ?><?php echo $pet_variety; ?></p>
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
	    						<h4>體型/毛色</h4>
	    						<p><?php echo $pet_size; ?><?php echo $pet_color; ?></p>
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
        <?php 
        $link=mysqli_connect('localhost','root','han20000914','sa');
        $sql1 = "SELECT * FROM account WHERE account.identify = $identify";
        $result= mysqli_query($link,$sql1);
        if($row=mysqli_fetch_assoc($result)){
                $name=$row['name'];
                $identify_phone=$row['identify_phone'];
            } 
            ?>
        <div class="chatuser">
          <span><img src="images/chat (1).png"> 聯絡送養人</span><br><br><br>
          <p><img src="images/owner.png"> 送養人: <a href="#" style="color: #5579c6;"><?php echo $name; ?></a></p>
          <p><img src="images/call.png"> 撥打電話: <?php echo $identify_phone; ?></p>
          <p><img src="images/send.png"> 傳送訊息: <a href="#" style="color: #5579c6;"><?php echo $name; ?></a></p>
        </div> 
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

    
  </body>
</html>