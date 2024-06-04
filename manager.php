<!DOCTYPE html>
<html lang="en">

<head>
    <title>管理者頁面</title>
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
     
    <link rel="stylesheet" href="chat3.css">
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
   .table {
            border-collapse: separate;
            border-spacing: 0;
            border: solid #dbd2c9 1px;
            border-radius: 15px;
            overflow: hidden;
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
              <li class="nav-item active"><a href="index.html" class="nav-link">寵物知識建議</a></li>
            </ul>
          </div>
        </div>
        <div class="bells">
          <a href="logout.php"><img src="images/logout.png" style="width: 25px;height: 25px;margin-right:20px;"></a>
          
        </div>

        <div class="dropdown">
        <?php  session_start(); ?>
          <button class="intromy"><a href="#"><img src="<?php echo $_SESSION['identify_photo']; ?>" style="border-radius: 50%;"><span><?php echo $_SESSION['name'];?></span></a></button>
        </div>
      </div>
      </nav>
    <!-- END nav -->
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
            $link = mysqli_connect('localhost', 'root', '', 'sa');
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
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>