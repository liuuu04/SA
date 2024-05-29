<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查看愛心申請書</title>
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="css/style1.css">
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
              <li class="nav-item"><a href="index.php" class="nav-link">首頁</a></li>
              <li class="nav-item"><a href="pet_knowledge.php" class="nav-link">寵物知識專區</a></li>
              
            </ul>
          </div>
        </div>
        

        <?php session_start(); ?>
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


  <div class="undertwo">
       <table class="table">
    <thead>
    <tr>
          <th>姓名</th>
          <th>想領養的寵物</th>
          <th>切結書檔案</th>
          <th>時間</th>
          <th>進行確認</th>
    </tr>
</thead>
<tbody>
<?php
    $identify = $_SESSION['identify'];
    include 'connection.php';
    $sql = "SELECT * FROM pet JOIN heart_file ON pet.pet_id = heart_file.pet_id WHERE pet.identify = '$identify'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><a href='#'>" . $row['name'] . "</a></td>";
            echo "<td>" . $row['pet_name'] . "</td>";
            echo "<td><a href='" . $row['file'] . "'>申請書文件</a></td>";
            echo "<td>" . $row['uploadtime'] . "</td>";
            if ($row['is_heart'] == 1) {
                echo "<td>已確認</td>";
            } else {
                echo "<td><a href='confirm.php?pet_id=" . $row['pet_id'] . "'>確認</a></td>";
            }
            echo "</tr>";
        }
    } else {
        echo "目前還沒有任何申請!";
    }
?>
</tbody>

       </table>

       <br>
       <h3>說明</h3>

       <h5>審視切結書申請時，建議您先透過私訊功能確認領養者的背景、經濟狀況、工作等。進行私下與寵物面對面的交流。<br>
       確認完畢後進行領養者的身分確認，可點選領養人名字連結至領養人的完整檔案。<br><br>
    
       請注意，一但確認寵物送養，寵物狀態將改為「已送養」，平台將不再顯示此寵物資訊，或推播此寵物資訊給其他使用者，您也無法再對寵物進行編輯。<br><br>
       您可以隨時回來確認愛心切結書內容，平台將幫您保留。</h5>
</div>



<style>
    .table{
        padding: 20px;
        background-color: #dbd2c9;
        border-collapse: collapse;
    }

    .table th{
        font-size: 18px;
        color: #000;
        font-weight: 550;
        width: 60px;
        text-align: center;
        border: 1px solid gray;
        padding: 20px;
    }

    .table td{
        font-size: 18px;
        color: #000;
        font-weight: 550;
        width: 60px;
        text-align: center;
        border: 1px solid gray;
        padding: 20px;
    }

    
    .undertwo {
    position: absolute;
    top: 150px;
    left: 20px;
}

  .undertwo a{
    color: #000;
    
  }
   
</style>
       </body>
</html>
