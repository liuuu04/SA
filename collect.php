<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>寵物領養平台-收藏</title>
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
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="new2.css">
    <link rel="stylesheet" href="css/select.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="chat1.css">
    <script src="https://kit.fontawesome.com/810f7f9a71.js" crossorigin="anonymous"></script>

    <style>
    .dropdown {
        position: relative;
        display: inline-block;
    }
  

    .dropdown-content {
        display: none;
        position: absolute;
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
   .dropdown-menu .dropdown-item:hover {
      background-color: #DBD2C9 !important;
      color: #000 !important;
    }

    .navbar-nav .dropdown:hover .dropdown-menu {
      display: block;
    }

    .navbar-nav .dropdown-menu {
      display: none;
      transition: visibility 0.2s, opacity 0.2s linear;
      color: #DBD2C9;
    }
    .modal-content {
            background-color: #f5f5dc;
            margin: auto;
            padding: 15px;
            border: 1.5px solid black;
            width: 80%;
            border-radius: 15px; 
            text-align: center;
            color:black;
            font-size: 18px;
        }
   </style>
    
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
              <li class="nav-item active"><a href="index.php" class="nav-link">首頁</a></li>
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="pet_knowledge.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    寵物知識專區
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="pet_knowledge_cat.php">貓</a>
                    <a class="dropdown-item" href="pet_knowledge_dog.php">狗</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
        </div>
        <div class="bells">
          <a href="logout.php"><img src="images/logout.png" style="width: 25px;height: 25px;margin-right:20px;"></a>
          
        </div>
        <div class="dropdown">
     
          <button class="intromy"><a href="#"><img src="<?php echo $_SESSION['identify_photo']; ?>" style="border-radius: 50%;"><span><?php echo $_SESSION['name'];?></span></a></button>
            <div class="dropdown-content" id="intromyDropdown">
            <a href="view.php">查看個人檔案</a>
                <a href="collect.php">已收藏寵物</a>
                <a href="pet_post.php">刊登寵物</a>
                <a href="viewpet.php">已刊登寵物</a>
                <a href="viewheart.php">愛心切結書審核</a>
                <a href="heart.docx">下載愛心認養切結書</a>
            </div>
        </div>
        
      </div>
      </nav>
      <p>
      <h2 align=center style="margin-top:50px;margin-bottom:30px;" ><img src="images/pets.png" alt="" width="40px" height="auto"><b> 我的收藏</b></h2>
      </p>
      <div class="contain">
      <?php
        session_start(); 
        if (!isset($_SESSION['identify'])) {
            header("Location: login.php");
            exit;
        }

        $identify = $_SESSION['identify'];

        $link = mysqli_connect('localhost', 'root', '', 'sa');

        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $sql = "SELECT DISTINCT pet.* FROM pet INNER JOIN collection ON pet.pet_id = collection.pet_id WHERE collection.identify = '$identify'";

        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) != 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pet_photo=$row['pet_photo'];
                ?>
            <div class="petframe">
            <div class="petphoto">
              <?php echo "<img src='{$pet_photo}' alt='{$introduce}'><br>" ?>
            </div>
            <div class="petintro">
            <span><?php echo $row['pet_name']; ?></span><p style="display: inline;"><?php echo $row['pet_publish']; ?></p>
            <a href="#" class="bookmarkLink" style="float:right;" data-pet-id="<?php echo $row['pet_id']; ?>" data-identify="<?php echo $row['identify']; ?>">
                            <i class="bookmarkIcon far <?php echo $is_bookmarked ? 'fa-bookmark' : 'fa-bookmark-o'; ?>" style="font-size:22px;color:black;float:right;"></i>
                        </a>
            <p><img src="images/pets (2).png"> <img src="images/pets.png"><?php echo $row['pet_type'];?>/<?php echo $row['pet_variety'];?></p>
            <p><img src="images/genders.png"> <?php echo $row['pet_gender'];?></p>
            <p><img src="images/age.png"> <?php echo $row['pet_age'];?>歲</p>
            <p><img src="images/location.png"> <?php echo $row['pet_address'];?></p>
            <p><img src="images/comment.png"> <?php echo $row['pet_explain'];?></p>
            <a href="petcard.php?pet_id=<?php echo $row['pet_id']; ?>"> 詳細資訊</a>
            </div>
          </div>

      <?php
        }
              }else{
                echo "您沒有收藏的寵物";

            }
          
      mysqli_close($link);
      ?>
    
  <!-- 寵物收藏彈跳視窗 -->
<div align="center">
<div id="myModal" class="modal">
    <div class="modal-content" style="width: 200px;height: 100px;margin:30px;" >
        <span class="close">&times;</span>
        <p id="modalMessage" style="text-align:center;line-height:50px;"></p>
    </div>
</div>
</div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
<script>
    document.querySelectorAll('.bookmarkLink').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); 

            var petFrame = this.closest('.petframe'); // 取得點選的寵物框
            var petId = this.dataset.petId;
            var identify = this.dataset.identify;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'collection.php?pet_id=' + petId + '&identify=' + identify + '&action=remove', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    petFrame.remove();
                    showModal('已取消收藏');
                } else {
                    console.error('取消收藏失败');
                }
            };
            xhr.send();
        });
    });

    function showModal(message) {
        var modal = document.getElementById('myModal');
        var modalMessage = document.getElementById('modalMessage');
        modalMessage.textContent = message;
        modal.style.display = 'block';
        setTimeout(function() {
            modal.style.display = 'none';
        }, 2000);
    }
</script>





  </body>
</html>