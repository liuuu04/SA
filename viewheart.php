<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查看愛心申請書</title>
    <link rel="stylesheet" href="test.css">
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
    $identify=$_SESSION['identify'];
    include 'connection.php';
    $sql="select * from pet join heart_file on pet.pet_id=heart_file.pet_id where pet.identify='$identify'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $name=$row['name'];
        $pet_name=$row['pet_name'];
        $file=$row['file'];
        $uploadtime=$row['uploadtime'];
        $pet_id=$row['pet_id'];
    

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><a href='" . $row['name'] . "'>" . $row['name'] . "</a></td>";
            echo "<td>" . $row['pet_name'] . "</td>";
            echo "<td><a href='" . $row['file'] . "'>申請書文件</a></td>";
            echo "<td>" . $row['uploadtime'] . "</td>";
            echo "<td><a href='confirm.php?pet_id=" . $row['pet_id'] . "'>確認</a></td>";
            echo "</tr>";

        
        }
    }else {
        echo "目前還沒有任何申請!";
    }
    ?>

</tbody>
       </table>

       <br>
       <h2>說明</h2>

       <h4>審視切結書申請時，建議您先透過私訊功能確認領養者的背景、經濟狀況、工作等。進行私下與寵物面對面的交流。<br>
       確認完畢後進行領養者的身分確認，可點選領養人名字連結至領養人的完整檔案。<br><br>
    
       請注意，一但確認寵物送養，寵物狀態將改為「已送養」，平台將不再顯示此寵物資訊，或推播此寵物資訊給其他使用者，您也無法再對寵物進行編輯。<br><br>
       您可以隨時回來確認愛心切結書內容，平台將幫您保留。</h4>
</div>



<style>
    .table{
        padding: 20px;
        background-color: #dbd2c9;
        
    }

    .table th{
        font-size: 18px;
        color: #000;
        font-weight: 550;
        width: 110px;
        text-align: center;
        border: 1px solid gray;
        padding: 20px;
    }

    .table td{
        font-size: 18px;
        color: #000;
        font-weight: 550;
        width: 110px;
        text-align: center;
        border: 1px solid gray;
        padding: 20px;
    }

    
    .undertwo {
    position: absolute;
    top: 150px;
    left: 350px;
}

  .undertwo a{
    color: #000;
    
  }
   
</style>
       </body>
</html>
