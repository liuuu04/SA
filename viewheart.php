<!DOCTYPE html>
<html lang="en">
  <head>
    <title>審核愛心切結書</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="new2.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="chat1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
        right: 20px;
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

   .accordion-button:not(.collapsed) {
      background-color: #DBD2C9;
      color: black;
      border-color: brown;
   }

   .pet-btn{
      background-color: #DBD2C9;
      color: #000;
      width:auto;
      font-size: large;
      border: 2px solid #DBD2C9;
      border-radius: 5px;
      margin-bottom: 15px;
      margin-left: 10px;
      margin-right: 10px;
   }

   .pet-knowledge{
    border: 3px solid #DBD2C9;
    border-radius: 5px;
    width: 100%;
    padding-left: 20px;
    padding-right: 20px;
    padding-top:20px;
    padding-bottom: 15px;
   }

   li{
    color: #000;
   }
   
   p{
    color: #000;
   }

   #back-to-top-section1 {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background-color: #DBD2C9;
    color: #000;
    border: none;
    border-radius: 50%;
    font-size: 16px;
    cursor: pointer;
    display: none;
    z-index: 9999;
    }

    #back-to-top-section1:hover {
      background-color: #DBD2C9;
      border: 1px solid black;
    }

    #back-to-top-section2 {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background-color: #DBD2C9;
    color: #000;
    border: none;
    border-radius: 50%;
    font-size: 16px;
    cursor: pointer;
    display: none;
    z-index: 9999;
    }

    #back-to-top-section2:hover {
      background-color: #DBD2C9;
      border: 1px solid black;
    }
   </style>
    
    
  </head>
  <body>
  <?php  session_start(); ?>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>寵物領養平台</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link">首頁</a></li>
              <li class="nav-item  active"><a href="pet_knowledge.php" class="nav-link">寵物知識專區</a></li>
              <li class="nav-item"><a href="services.html" class="nav-link">討論區</a></li>
              
            </ul>
          </div>
        </div>
        

  
        <?php if(isset($_SESSION['identify_photo']) && isset($_SESSION['name'])): ?>
            <div class="bells">
                <a href="logout.php"><img src="images/logout.png" style="width: 25px;height: 25px;margin-right:20px;"></a>
            </div>
        <?php endif; ?>

            <div class="dropdown">
                <?php if(isset($_SESSION['identify_photo']) && isset($_SESSION['name'])): ?>
                    <button class="intromy"><a href="#"><img src="<?php echo $_SESSION['identify_photo']; ?>" style="border-radius: 50%;"><span><?php echo $_SESSION['name'];?></span></a></button>
                    <div class="dropdown-content" id="intromyDropdown">
                        <a href="view.php">查看個人檔案</a>
                        <a href="collect.php">已收藏寵物</a>
                        <a href="pet_post.php">刊登寵物</a>
                        <a href="viewpet.php">已刊登寵物</a>
                        <a href="viewheart.php">愛心切結書審核</a>
                        <a href="heart.docx">下載愛心認養切結書</a>
                    </div>
                <?php else: ?>
                    <button class="intromy"><a href="login.php"  style="color: black;">登入/註冊</a></button>
                    <div class="dropdown-content" id="intromyDropdown">
                    </div>
                <?php endif; ?>
            </div>
        
      </div>
      
      </nav>
    <!-- END nav -->

    <div style="margin-top:70px;margin-bottom:10px;font-size:large;">
      <ul class="nav nav-underline justify-content-center">
        <li class="nav-item" style="margin-right:40px;">
          <a class="nav-link" href="#" onclick="showTab('section1')" style="color: #000;">送養人身分</a>
        </li>
        <li class="nav-item" style="margin-left:40px;">
          <a class="nav-link" href="#" onclick="showTab('section2')" style="color: #000;">領養人身分</a>
        </li>
      </ul>
    </div>
    <hr style="margin: 20px 0; border-color: #000;">

  <!-- SESSION1 -->
   
    <!-- 索引 -->
    <div id="section1" style="display: block;margin-top:50px;margin-left:130px;margin-right:130px;margin-bottom:50px;">
      <div style="margin-bottom:10px;">
        <ul class="nav nav-pills">
          
          <li class="nav-item">
            <button class="pet-btn" onclick="scrollToElement('health')">送養人身分申請</button>
          </li>
         
         
        </ul>
      </div>
      <!-- 索引end -->

     
   
     



      
      <table class="table2">
    <tr>
          <th style="border-top-left-radius: 15px;">姓名</th>
          <th>想領養的寵物</th>
          <th>切結書檔案</th>
          <th>時間</th>
          <th style="border-top-right-radius: 15px;;">進行確認</th>
    </tr>


<?php
    $identify = $_SESSION['identify'];
    include 'connection.php';
    $sql = "SELECT * FROM pet JOIN heart_file ON pet.pet_id = heart_file.pet_id WHERE pet.identify='$identify'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $pet_name = $row['pet_name'];
            $file = $row['file'];
            $uploadtime = $row['uploadtime'];
            $pet_id = $row['pet_id'];
            $is_heart = $row['is_heart'];
            $heart_id= $row['heart_id'];
    
            echo "<tr>";
            echo "<td><a href='" . $name . "' class='bot2'>" . $name . "</a></td>";
            echo "<td>" . $pet_name . "</td>";
            echo "<td><a href='" . $file . "' class='bot2'>申請書文件</a></td>";
            echo "<td>" . $uploadtime . "</td>";
            
            if ($is_heart == '0') {
                echo "<td><a href='confirm.php?pet_id=" . $pet_id . "&heart_id=" . $heart_id . "' class='bot3'>確認</a> <a href='confirm.php?pet_id=" . $pet_id . "&heart_id=" . $heart_id . "' class='bot'>駁回</a></td>";
            } elseif ($is_heart == '1') {
                echo "<td>已確認申請</td>";
            } else {
                echo "<td>未知狀態</td>";
            }
            
            echo "</tr>";
        }
    } else {
        echo "目前還沒有任何申請!";
    }
?>    


       </table>
       
       <br>
       <h4>說明</h4>

<h6>審視切結書申請時，建議您先透過私訊功能確認領養者的背景、經濟狀況、工作等。進行私下與寵物面對面的交流。<br>
確認完畢後進行領養者的身分確認，可點選領養人名字連結至領養人的完整檔案。<br><br>

請注意，一但確認寵物送養，寵物狀態將改為「已送養」，平台將不再顯示此寵物資訊，或推播此寵物資訊給其他使用者，您也無法再對寵物進行編輯。<br><br>
您可以隨時回來確認愛心切結書內容，平台將幫您保留。</h6>



<style>
  
    .table2{
        border-bottom: 2px solid #dee2e6; 
        width: 1150px;
        
        background-color: #fff;
    }
    .table2 th{
        font-size: 18px;
        color: #fff;
        font-weight: 550;
        text-align: center;
        border: none;
        padding: 10px;
        background-color: #383048;
        
    }

    .table2 td{
        font-size: 18px;
        color: #000;
        
        text-align: center;
        border: none;
        padding: 10px;
    }

  

    .bot{
      color: #fff;
      margin-left: 15px;
      padding: 5px 20px;
      background-color: #e74d4d;
      font-weight: 550;
      border-radius: 15px;
    }

    .bot:hover{
      color: #e74d4d;
      background-color: #fff;
    }

    .bot2{
      color: #000;
    }

    .bot3{
      color: #fff;
      padding: 5px 20px;
      background-color: #11b192;
      font-weight: 550;
      border-radius: 15px;
    }

    .bot3:hover{
      background-color: #fff;
      color: #11b192;
    }
    
    </style>
      





      <button onclick="scrollToTop('section1')" id="back-to-top-section1" title="回到頂部"><span>&#8593;</span></button>
    </div>

    

  <!-- SESSION2 -->
  <div id="section2" style="display: none;margin-top:50px;margin-left:130px;margin-right:130px;margin-bottom:50px;">
  <div class="hey">
  <table class="table2">
    <tr>
          <th style="border-top-left-radius: 15px;">姓名</th>
          <th>想領養的寵物</th>
          <th>切結書檔案保留檔</th>
          <th>申請時間</th>
          <th style="border-top-right-radius: 15px;;">確認狀態</th>
    </tr>


<?php

   include 'connection.php';
   $sql2 = "SELECT * FROM account JOIN heart_file ON account.identify=heart_file.identify WHERE heart_file.identify='$identify'";
   
   $result = $conn->query($sql2);
   
   if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
           $name = $row['name'];
           $pet_name = $row['pet_name'];
           $file = $row['file'];
           $uploadtime = $row['uploadtime'];
           $pet_id = $row['pet_id'];
           $is_heart = $row['is_heart'];
         
           if ($is_heart == '0') {
               $is_heartchecked = '尚未確認';
           } elseif ($is_heart == '1') {
               $is_heartchecked = '已確認';
           } else {
               $is_heartchecked = '遭駁回，請與送養者確認詳細內容';
           }
   
           echo "<tr>";
           echo "<td>" . $name . "</td>";
           echo "<td>" . $pet_name . "</td>";
           echo "<td><a href='" . $file . "' class='bot2'>申請書文件</a></td>";
           echo "<td>" . $uploadtime . "</td>";
           echo "<td>$is_heartchecked</td>";
           echo "</tr>";
       }
   } else {
       echo "您目前還沒有任何申請!";
   }
   
    ?>


       </table>
  </div>
      <button onclick="scrollToTop('section2')" id="back-to-top-section2" title="回到頂部"><span>&#8593;</span></button>

  </div>

  

    <script>
    function showTab(tabId) {
        // 隱藏所有區域
        var tabs = document.querySelectorAll('[id^="section"]');
        tabs.forEach(function(tab) {
            tab.style.display = 'none';
        });
        // 顯示選定的區域
        document.getElementById(tabId).style.display = 'block';
    }

    // 回頂部
    function scrollToTop(sectionId) {
        var section = document.getElementById(sectionId);
        if (section) {
            window.scrollTo({ top: 0, behavior: "smooth" });
        }
    }
 
    window.onscroll = function() {
      scrollFunction();
    };

    function scrollFunction() {
      var button1 = document.getElementById("back-to-top-section1");
      var button2 = document.getElementById("back-to-top-section2");
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          button1.style.display = "block";
          button2.style.display = "block";
      } else {
          button1.style.display = "none";
          button2.style.display = "none";
      }
    }
    // 回頂部end


    // 索引
    function scrollToElement(id) {
      var element = document.getElementById(id);
      if (element) {
        element.scrollIntoView({ behavior: "smooth" });
      }
    }
    // 索引end


    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', () => {
            if (!button.classList.contains('collapsed')) {
                // 非折疊狀態下
                button.style.backgroundColor = '#DBD2C9';
                button.style.borderColor = '#DBD2C9';
                button.style.boxShadow = '0 0 10px #DBD2C9';
            } else {
                // 折疊狀態下
                // button.style.borderColor = 'DBD2C9'; 
                button.style.backgroundColor = 'white';
                // button.style.boxShadow = '0 0 10px #DBD2C9';
            }
        });
    });
    </script>

  </body>
</html>