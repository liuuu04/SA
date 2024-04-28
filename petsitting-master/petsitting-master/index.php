<!DOCTYPE html>
<html lang="en">
  <head>
    <title>寵物領養平台-首頁</title>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
    <link rel="stylesheet" href="css/chat1.css">
	<!-- <link rel="icon" href="images/" -->

 
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>寵物領養平台</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">首頁</a></li>
	        	<li class="nav-item"><a href="vet.html" class="nav-link">寵物知識專區</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">討論區</a></li>
	          <li class="nav-item"><a href="gallery.html" class="nav-link">寵物展</a></li>
	        </ul>
	      </div>
	    </div>
      <div class="bells">
      <a href="#"><img src="images/bell.png" style="width: 30px;height: 30px;margin-right:20px;"></a>
      </div>
       <?php
      session_start();

      if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
    
    $buttonText = $_SESSION['name'];}
    
    else {
    
    $buttonText = "登入/註冊";}
    ?>

<button class="intromy"><a href="#"><img src="images/owner.png"><span><?php echo $buttonText; ?></span></a></button>
    </div>
		
	  </nav>
    <!-- END nav -->
    <section class="ftco-section testimony-section" style="background-image: url('images/bg_2.jpg');">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2><span class="flaticon-pawprint-1 mr-2"></span>寵物領養平台-活動公告</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img"><img src="images/loudspeaker.png"></div>
                    	<div class="pl-3">
		                    <p class="name">2024-04-28</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img"><img src="images/loudspeaker.png"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img"><img src="images/loudspeaker.png"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img"><img src="images/loudspeaker.png"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img"><img src="images/loudspeaker.png"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <div class="search1">
		<form action="search.php" method="GET">
			<input type="text" id="searchinput" placeholder="關鍵字搜尋...">
      <button type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
		</form>
    </div>

    <div class="contain">
    <?php
  
      $link=mysqli_connect('localhost','root','han20000914','sa');
      mysqli_set_charset($link,"utf8");
      $sql = "SELECT pet_id, pet_name, pet_type, pet_publish, pet_variety, pet_gender, pet_age, pet_address, pet_explain From pet";
      $result=mysqli_query($link,$sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          
            ?>
    
		<div class="petframe">
		  <div class="petphoto">
	  <img src="images/bookmark.png">
		  </div>
		  <div class="petintro">
			 <span><?php echo $row['pet_name']; ?></span><p style="display: inline;"><?php echo $row['pet_publish']; ?></p>
			 <p><img src="images/pets (2).png"> <img src="images/pets.png"><?php echo $row['pet_type'];?><?php echo $row['pet_variety'];?></p>
			 <p><img src="images/genders.png"> <?php echo $row['pet_gender'];?></p>
			 <p><img src="images/age.png"> <?php echo $row['pet_age'];?>歲</p>
			 <p><img src="images/location.png"> <?php echo $row['pet_address'];?></p>
			 <p><img src="images/comment.png"> <?php echo $row['pet_explain'];?></p>
			 
			 <a href="petcard.php?pet_id=<?php echo $row['pet_id']; ?>"> 詳細資訊</a>
			 <a href="#">聯絡送養人</a>
		  </div>
		</div>

    <?php
    }
}
mysqli_close($link);
?>
</div>
<?php
session_start(); 

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$current_identify = $_SESSION['identify'];

$sql = "SELECT DISTINCT Account.identify, Account.name AS receiver_name
        FROM message
        JOIN Account ON message.receiver_id = Account.identify
        WHERE message.sender_id = '$current_identify'
        UNION
        SELECT DISTINCT Account.identify, Account.name AS receiver_name
        FROM message
        JOIN Account ON message.sender_id = Account.identify
        WHERE message.receiver_id = '$current_identify'";

$result = mysqli_query($link, $sql);

if ($result === false) {
    die("ERROR: Could not execute query. " . mysqli_error($link));
}

$contacts = array();

while ($row = mysqli_fetch_assoc($result)) {
    $contacts[] = $row;
}
?>

<div class="chat-icon" onclick="toggleContactsList()">💬</div>

<div id="chatPopup" class="chat-popup">
  <div class="chat-header">
    <div class="back-btn" onclick="hideChatPopup()">←</div> 
    <div class="user-name" id="chatUserName"></div> 
    <div class="close-btn" onclick="toggleChat()">×</div>
  </div>
  <div class="chat-messages" id="chatMessages">

  </div>
  <div class="row">
    <div class="col-md-12">
      <input type="text" id="chatInput" class="chat-input" placeholder="寫下你想說的話...">
    </div>
  </div>
  
  <button class="icon-button" onclick="document.getElementById('photoInput').click()">
    <i class="material-icons">&#xe413;</i>
  </button>
  
  <input type="file" id="photoInput" style="display: none;" accept="image/*" onchange="handlePhotoUpload()">

  <button onclick="sendMessage()" class="send-btn"><i class="fa fa-send-o" style="font-size:18px"></i></button> 
</div>

<div id="contactsList" class="contacts-list">
<div class="contacts-header">聯絡人</div>
  <div class="close-btn" onclick="hideContactsList()">×</div>

  <?php
  foreach ($contacts as $contact) {

      $identify_photo = ""; 
      $receiver_identify = $contact['identify'];
      $query_photo = "SELECT identify_photo FROM account WHERE identify = '$receiver_identify'";
      $result_photo = mysqli_query($link, $query_photo);
      if ($result_photo) {
          $row_photo = mysqli_fetch_assoc($result_photo);
          $identify_photo = $row_photo['identify_photo'];
      }
      
      echo '<div class="contact" onclick="openChat(\'' . $contact['identify'] . '\', \'' . $contact['receiver_name'] . '\')">';
      echo '<img src="' . $identify_photo . '" alt="' . $contact['receiver_name'] . '">';
      echo '<span>' . $contact['receiver_name'] . '</span>';
      echo '</div>';
  }
  ?>
</div>


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
  <script src="js/chat.js"></script>

  </body>
</html>
