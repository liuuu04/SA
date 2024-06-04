<?php 
session_start();
include('connection.php');
if (!isset($_SESSION['identify'])) {
    header("Location:index.php");
    exit();
    
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>管理員面板</title>
        <script src="https://code.highcharts.com/highcharts.js"></script>
      
        <link rel="stylesheet" href="stylesignup.css"/> 
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
	        	<li class="nav-item"><a href="vet.html" class="nav-link">討論區</a></li>
                <?php if ($_SESSION['identify_level'] == 'admin') { ?>
                <li class="nav-item"><a href="vadmin.php" class="nav-link">管理員面板</a></li>
                <?php } ?>
	        </ul>
	      </div>
	    </div>

      <div class="bells">
          <a href="logout.php"><img src="images/logout.png" style="width: 25px;height: 25px;margin-right:20px;"></a>
          
        </div>
      <div class="dropdown">

      <?php
    
        $identify = $_SESSION['identify'];

        include('connection.php');
        $sql = "SELECT * FROM account WHERE identify = '$identify'";
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $identify_photo = $row['identify_photo'];
            $name = $row['name'];
        }
        ?>
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

<br><br><br>
<div class='profile'>
<?php 
include('connection.php');
$identifyCountQuery = "SELECT COUNT(DISTINCT identify) AS identify_count FROM account";
$identifyCountResult = $conn->query($identifyCountQuery);
$identifyCountRow = $identifyCountResult->fetch_assoc();
$identifyCount = $identifyCountRow['identify_count'];



$petIdCountQuery = "SELECT COUNT(DISTINCT pet_id) AS pet_id_count FROM pet";
$petIdCountResult = $conn->query($petIdCountQuery);
$petIdCountRow = $petIdCountResult->fetch_assoc();
$petIdCount = $petIdCountRow['pet_id_count'];


?>
<h2 align=center style="margin-top:50px;margin-bottom:30px;" ><img src="images/pets.png" alt="" width="40px" height="auto"><b>這裡是統計數據的概覽內容</b></h2>
<hr>
<div class="stats">
<div id="pieChart" style="width: 400px; height: 400px;"></div>


<script>
    Highcharts.chart('pieChart', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: '平台統計'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: '數量',
            data: [
                ['使用者', <?php echo $identifyCount; ?>],
                ['寵物', <?php echo $petIdCount; ?>]
            ]
        }]
    });
</script>
</div>



    <?php if ($_SESSION['identify_level'] == "admin") ?>
    <?php
    $identify = $_SESSION['identify'];

    
   include('connection.php');
   $sql = "SELECT * FROM report";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $report_id = $row['report_id'];
        $identify = $row['identify'];
        $reportedidentify = $row['reportedidentify'];
        $content = $row['content'];
        $comment = $row['comment'];
    }
    ?>
        <h2 align=center style="margin-top:50px;margin-bottom:30px;" ><img src="images/pets.png" alt="" width="40px" height="auto"><b>被檢內容</b></h2>
        <hr>
        <table border="1">
            

            
        <tr>
            <th>被檢id</th>
            <th>被檢人的id</th>
            <th>寵物id</th>
            <th width=15%>被檢人的id被</th>
            <th>內容</th>
            <th>評論</th>
            <th>查看/刪除</th>
        </tr>
        <?php $sql = "SELECT * FROM report";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
       

            <td><?php echo $row['report_id']; ?></td>
            <td><?php echo $row['identify']; ?></td>
            <td><?php echo $row['pet_id']; ?></td>
            <td><?php echo $row['reportedidentify']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><?php echo $row['comment']; ?></td>
            <td>
                <a href="viewreport.php?report_id=<?php echo $row['report_id']; ?>">查看</a><br>
                <a href="vdelreport.php?report_id=<?php echo $row['report_id']; ?>" onclick="return confirm('您確定要刪除嗎?');">刪除</a>
            </td>
            </tr>
            <?php endwhile; ?>

        </table>

        <div class="container mt-5">
      <h2 align=center style="margin-top:50px;margin-bottom:30px;" ><img src="images/pets.png" alt="" width="40px" height="auto"><b> 寵物知識專區內容建議</b></h2>
    <h5>貓：</h5>
    <table class="table table-bordered">
        <thead>
            <tr style="background-color: #dbd2c9;color:black;">
                <th>建議類別</th>
                <th>種類</th>
                <th>建議內容</th>
                <th>提交時間</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
            if (!$link) {
                die("連接失敗: " . mysqli_connect_error());
            }

            $sql = "SELECT suggest_id,categories, type, content, time FROM suggest WHERE type = '貓'";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['categories'] . "</td>";
                    echo "<td>" . $row['type'] . "</td>";
                    echo "<td>" . $row['content'] . "</td>";
                    echo "<td>" . $row['time'] . "</td>";
                    echo "<td><a href='deletesuggest.php?suggest_id={$row['suggest_id']}' onclick=\"return confirm('確定要刪除此建議？')\" style='background-color: #E45F2B;color:#fff;'>刪除</a></td>";
                    echo "</tr>";
                }

            } else {
                echo "<tr><td colspan='4' class='text-center'>目前還沒有任何建議!</td></tr>";
            }
            ?>
        </tbody>
    </table>


    <h5>狗：</h5>
    <table class="table table-bordered">
        <thead>
            <tr style="background-color: #dbd2c9;color:black;">
                <th>建議類別</th>
                <th>種類</th>
                <th>建議內容</th>
                <th>提交時間</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT suggest_id,categories, type, content, time FROM suggest WHERE type = '狗'";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['categories'] . "</td>";
                    echo "<td>" . $row['type'] . "</td>";
                    echo "<td>" . $row['content'] . "</td>";
                    echo "<td>" . $row['time'] . "</td>";
                    echo "<td><a href='deletesuggest.php?suggest_id={$row['suggest_id']}' onclick=\"return confirm('確定要刪除此建議？')\" style='background-color: #E45F2B;color:#fff;'>刪除</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>目前還沒有任何建議!</td></tr>";
            }

            mysqli_close($link);
            ?>
        </tbody>
    </table>
</div>




        <?php
if ($_SESSION['identify_level'] == "admin") {
    $identify = $_SESSION['identify'];
    $count = 1;
    $sel_query = "SELECT * FROM account ORDER BY identify;";
    $result = mysqli_query($conn, $sel_query);
?>
<h2 align=center style="margin-top:50px;margin-bottom:30px;" ><img src="images/pets.png" alt="" width="40px" height="auto"><b>使用者控制</b></h2>
        <hr>

<table>
    <tr>
        <th>使用者帳號</th>
        <th>使用者姓名</th>
        <th>使用者性別</th>
        <th>使用者生日</th>
        <th>使用者頭貼照片</th>
        <th>使用者權限</th>
        <th>使用者電子郵件</th>
        <th width=15%>刪除</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        
        <td><?php echo $row["identify"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["birth"]; ?></td>
        <td>
            <?php
            $identify_photo = $row["identify_photo"];
            if (!empty($identify_photo)) {
                echo '<img src="' . $identify_photo . '" alt="Photo" style="width: 100px; height: auto;">';
            } else {
                echo '没有照片';
            }
            ?>
        </td>
        <td><?php echo $row["identify_level"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        
         <td width=15%> <a href="delete.php?id=<?php echo $row["identify"]; ?>">刪除</a></td>
        
    </tr>
    <?php
        $count++;
    }
    ?>
   
</table>

<?php
}
?>
        
        <br><a class="button" href="index.php">返回到首頁</a>
        <a class="button" href="logout.php">发出</a>

    
        </div> 
</body>
<style>
        body {
        background: url("images/bgpet.png") no-repeat center center fixed;
          background-size: cover;
          font-family: Arial, sans-serif;
        }
        #logoutContainer {
        
        text-align: right;
        display: flex;
        justify-content: flex-end;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif; 
            background-color: #f9f9f9; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
        th, td {
            border: 2px solid #ddd;
            padding: 9px;
            text-align: left;
        }
        th {
            background-color: #f5f5dc;
            text-align: left;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
      
        .profile {
            border: none;
            border-radius: 10px; 
            padding: 20px; 
            margin-bottom: 20px; 
            background-color: #f9f9f9;
            width: 70%; 
            margin: 20px auto; 
            padding: 60px; 
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3); 
        }
        
        .button{
            color: #000;
          font-weight: 600;
          background-color: #f5f5dc;
          padding: 10px 20px 10px 20px;
          font-size: 16px;
          border-radius: 30px;
          border: none;
          transition: background-color 0.3s ease;
          border: none;
          text-decoration: none;
          margin-right: 5px;
        }
        
        .stats {
            display: flex;
            justify-content: center; 
            align-items: center; 
            
        }
        
    </style>
</html>
