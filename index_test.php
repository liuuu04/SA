<!DOCTYPE html>
<html lang="en">
  <head>
    <title>寵物領養平台-首頁</title>
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
  
    .unread-count {
    color: white;
    font-size: 12px;
    margin-left: auto; /* 將未讀訊息數量移到最右邊 */
    margin-right: 10px; /* 調整右邊的間距 */
    display: inline-flex; /* 讓元素變成彈性盒子 */
    align-items: center; /* 在彈性盒子中垂直居中 */
    justify-content: center; /* 在彈性盒子中水平居中 */
    width: 15px; /* 設置寬度 */
    height: 15px; /* 設置高度 */
    border-radius: 50%; /* 使元素變成圓形 */
    background-color: #FF3B3B; /* 紅色背景 */
    }



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

   .modal-content {
            background-color: #f5f5dc;
            margin: auto;
            padding: 15px;
            border: 1.5px solid black;
            width: 80%;
            border-radius: 15px; /* 圓角邊框 */
            text-align: center; /* 文字居中 */
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
              <li class="nav-item"><a href="pet_knowledge.php" class="nav-link">寵物知識專區</a></li>
              <li class="nav-item"><a href="services.html" class="nav-link">討論區</a></li>
              
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
                    <p class="mb-4">在「毛家庭」當道的趨勢下，養寵物的親子家庭越來越多，有了毛孩的陪伴，也可以培養孩子們的責任感和愛心。不過也有不少家長會思考「家中同時有小孩和毛孩，該怎麼照顧？」原因不外乎擔心孩子會因此過敏、寵物與孩子相處時不懂得拿捏而互相受傷，又或是家中保持清潔衛生不易等等。</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img"><img src="images/loudspeaker.png"></div>
                    	<div class="pl-3">
		                    <p class="name">【2024台北寵物節】毛家庭OneHealth健康週記</p>
		                    <span class="position">寵博健康動物醫院（台北市松山區三民路108-30號1樓）</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">每種動物都有其與生俱來的個性和生活習慣，寵物是一個生命、也是我們的家人，千萬不能因為一時興起覺得可愛就衝動飼養，了解寵物的特質及正確的飼養方式，並且慎重評估自家的環境情況是否適合飼養，這是最重要的！</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img"><img src="images/loudspeaker.png"></div>
                    	<div class="pl-3">
		                    <p class="name">成長空間萌寵動物派對｜與獸醫師一起教給孩子的生命教育課程</p>
		                    <span class="position">成長空間診所（台北市敦化南路一段236巷29號1樓）</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">去年的九九重陽節，國寶集團在東華高爾夫球場首開台灣球場業界之先例，舉辦 一場別開生面的「健走18洞，健康動一動」的重陽健走活動，獲得熱烈迴響，當天湧入多達六百位民眾， 漫步在綠草如茵的球道上，感受東華球場的迷人風光。
                                今年五月，國寶集團又在旗下的黃金海岸球場舉辦 「手牽手、來健走」。</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img"><img src="images/loudspeaker.png"></div>
                    	<div class="pl-3">
		                    <p class="name">【手牽寵來健走】九九重陽節公益健走！「攜帶寵物同行者」免費參加喔！</p>
		                    <span class="position">253新北市石門區草埔尾5號（黃金海岸高爾夫球場）</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <!-- <div class="item">
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
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
   
    
    <section class="ftco-section bg-light select">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <a href="index3.php"><button class="btn all py-2 px-3" style="font-size:16px;">列出全部</button></a>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- 寵物篩選 -->
                        <div class="heading-section mb-5 mt-5 mt-lg-0">
                            <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header p-0" id="headingOne">
                                        <h2 class="mb-0">
                                            <button href="#Select"
                                                class="d-flex py-2 px-4 align-items-center justify-content-between btn btn-link"
                                                data-parent="#accordion" data-toggle="collapse" aria-expanded="true"
                                                aria-selects="Select">
                                                <p class="mb-0">
                                                    <i class="fa-solid fa-bars fa-sm"></i>
                                                    寵物篩選</p>
                                                <i class="fa" aria-hidden="true"></i>
                                            </button>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- 關鍵字搜尋 -->
                        <form id="searchForm">
                            <div class="search1">
                                <input type="text" id="searchinput" placeholder="關鍵字搜尋..." name="keyword">
                                <button type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                   </div>
                            <div class="collapse" id="Select" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body py-3 px-0">
                                <div style="padding:5px"> 
                              <form action="#" method="post" id="petFilterForm" class="appointment" name="select">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <header style="margin-left: 10px;">種類</header>
                                                        <div class="icon"><span class="fa fa-chevron-down" style="margin-top: 33px;"></span></div>
                                                        <select name="pet_type" id="pet_type" class="form-control">
                                                            <option disabled selected hidden>&nbsp&nbsp--請選擇--</option>
                                                            <option value="狗">狗</option>
                                                            <option value="貓">貓</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                        <header style="margin-left: 10px;">結紮與否</header>
                                            <div class="icon"><span class="fa fa-chevron-down" style="margin-top: 33px;"></span></div>
                                            <select name="pet_ligation" id="pet_ligation" class="form-control">
                                                <option disabled selected hidden>&nbsp&nbsp--請選擇--</option>
                                                <option value="已結紮">已結紮</option>
                                                <option value="尚未結紮">尚未結紮</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                        <header style="margin-left: 10px;">年齡</header>
                                            <div class="icon"><span class="fa fa-chevron-down" style="margin-top: 33px;"></span></div>
                                            <select name="pet_age" id="pet_age" class="form-control">
                                                <option disabled selected hidden>&nbsp&nbsp--請選擇--</option>
                                                <option value="0-1">0-1</option>
                                                <option value="2-3">2-3</option>
                                                <option value="4-8">4-8</option>
                                                <option value="8+">8+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                        <header style="margin-left: 10px;">性別</header>
                                            <div class="icon"><span class="fa fa-chevron-down" style="margin-top: 33px;"></span></div>
                                            <select name="pet_gender" id="pet_gender" class="form-control">
                                                <option disabled selected hidden>&nbsp&nbsp--請選擇--</option>
                                                <option value="公">公</option>
                                                <option value="母">母</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                        <header style="margin-left: 10px;">病史</header>
                                            <div class="icon"><span class="fa fa-chevron-down" style="margin-top: 33px;"></span></div>
                                            <select name="pet_medical" id="pet_medical_select" class="form-control">
                                                <option disabled selected hidden>&nbsp&nbsp--請選擇--</option>
                                                <option value="有">有</option>
                                                <option value="無">無</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">
                                            <header style="margin-left: 10px;">體型</header>
                                                <div class="icon"><span class="fa fa-chevron-down" style="margin-top: 33px;"></span></div>
                                                <select name="pet_size" id="pet_size" class="form-control">
                                                    <option disabled selected hidden>&nbsp&nbsp--請選擇--</option>
                                                    <option value="大">大</option>
                                                    <option value="中">中</option>
                                                    <option value="小">小</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                        <header style="margin-left: 10px;">縣市</header>
                                            <div class="icon"><span class="fa fa-chevron-down" style="margin-top: 33px;"></span></div>
                                            <select name="pet_address" id="pet_address" class="form-control">
                                                <option disabled selected hidden>&nbsp&nbsp--請選擇--</option>
                                                <option value="台北市">台北市</option>
                                                <option value="新北市">新北市</option>
                                                <option value="桃園市">桃園市</option>
                                                <option value="新竹縣">新竹縣</option>
                                                <option value="新竹市">新竹市</option>
                                                <option value="苗栗縣">苗栗縣</option>
                                                <option value="台中市">台中市</option>
                                                <option value="彰化縣">彰化縣</option>
                                                <option value="南投縣">南投縣</option>
                                                <option value="雲林縣">雲林縣</option>
                                                <option value="嘉義市">嘉義市</option>
                                                <option value="嘉義縣">嘉義縣</option>
                                                <option value="台南市">台南市</option>
                                                <option value="高雄市">高雄市</option>
                                                <option value="屏東縣">屏東縣</option>
                                                <option value="花蓮縣">花蓮縣</option>
                                                <option value="台東縣">台東縣</option>
                                                <option value="宜蘭縣">宜蘭縣</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-2 offset-md-5" style="margin-top: 20px;">
                                    <div class="form-group" text-align: center;>
                                        <input type="submit" value="確定" class="selectbtn btn-primary py-2 px-3" style="font-size:16px;">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                    </div>
                            </div>
                        </div>
                    </div>
                </div>     
    </div>
</section>

<?php
if (isset($_SESSION['message'])) {
    echo "<p>{$_SESSION['message']}</p>";
    unset($_SESSION['message']);
}
?>

<div class="contain">
<?php
    session_start();
    $link = mysqli_connect('localhost', 'root', '', 'sa');

    $sql = "SELECT * FROM pet WHERE 1";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pet_type = isset($_POST['pet_type']) ? $_POST['pet_type'] : '';
    $pet_ligation = isset($_POST['pet_ligation']) ? $_POST['pet_ligation'] : '';
    $pet_age = isset($_POST['pet_age']) ? $_POST['pet_age'] : '';
    $pet_gender = isset($_POST['pet_gender']) ? $_POST['pet_gender'] : '';
    $pet_address = isset($_POST['pet_address']) ? $_POST['pet_address'] : '';
    $pet_medical = isset($_POST['pet_medical']) ? $_POST['pet_medical'] : '';
    $pet_medical_input = isset($_POST['pet_medical_input']) ? $_POST['pet_medical_input'] : '';
    $pet_size = isset($_POST['pet_size']) ? $_POST['pet_size'] : '';

    $conditions = array();
    if (!empty($pet_type)) {
        $conditions[] = "`pet_type` = '$pet_type'";
    }
    if (!empty($pet_ligation)) {
        $conditions[] = "`pet_ligation` = '$pet_ligation'";
    }
    if (!empty($pet_age)) {
        switch ($pet_age) {
            case "0-1":
                $conditions[] = "`pet_age` >= 0 AND `pet_age` <= 1";
                break;
            case "2-3":
                $conditions[] = "`pet_age` >= 2 AND `pet_age` <= 3";
                break;
            case "4-8":
                $conditions[] = "`pet_age` >= 4 AND `pet_age` <= 8";
                break;
            case "8+":
                $conditions[] = "`pet_age` >= 8";
                break;
            default:
                break;
        }
    }
    
    if (!empty($pet_gender)) {
        $conditions[] = "`pet_gender` = '$pet_gender'";
    }
    if (!empty($pet_address)) {
        $conditions[] = "`pet_address` = '$pet_address'";
    }

    if (!empty($pet_medical)) {
        $conditions[] = "`pet_medical` = '$pet_medical'";
    }

    if (!empty($pet_size)) {
        $conditions[] = "`pet_size` = '$pet_size'";
    }

    if (!empty($conditions)) {
        if (empty($pet_medical_input)) {
            $sql .= " AND " . implode(" AND ", $conditions);
        } else {
            $sql = "SELECT * FROM pet JOIN pet_medical ON pet.pet_id = pet_medical.pet_id WHERE " . implode(" AND ", $conditions);
        }
    }

    $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pet_level = $row['pet_level'];
                $pet_photo = $row['pet_photo'];
                ?>
                <?php if ($pet_level == 'in_progress') { ?>
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
                <?php }
            }
        } else {
            echo "查無結果"; ?>
            <div style="margin-bottom:100px;"></div>
            <?php
        }
    } elseif (isset($_GET['keyword'])) {
        // 關鍵字條件
        $keyword = $_GET['keyword'];

        $sql = "SELECT * FROM pet WHERE
        pet_name LIKE '%$keyword%' OR 
        pet_age LIKE '%$keyword%' OR
        pet_character LIKE '%$keyword%' OR
        pet_medical LIKE '%$keyword%' OR
        pet_type LIKE '%$keyword%' OR 
        pet_variety LIKE '%$keyword%' OR
        pet_color LIKE '%$keyword%' OR
        pet_gender LIKE '%$keyword%' OR
        pet_size LIKE '%$keyword%' OR
        pet_address LIKE '%$keyword%' OR
        pet_ligation LIKE '%$keyword%' OR
        pet_withkidpet LIKE '%$keyword%' OR
        pet_explain LIKE '%$keyword%' 
        ";

        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pet_level = $row['pet_level'];
                $pet_photo = $row['pet_photo'];
                ?>
                <?php if ($pet_level == 'in_progress') { ?>
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
                <?php }
            }
        } else {
            echo "查無結果"; ?>
            <div style="margin-bottom:100px;"></div>
            <?php
        }
    } else {  
        $sql = "SELECT pet_id, pet_name, pet_type, pet_publish, pet_variety, pet_gender, pet_age, pet_address, pet_explain, pet_photo, pet_level FROM pet";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pet_photo = $row['pet_photo'];
                $pet_level = $row['pet_level'];
                ?>
                <?php if ($pet_level == 'in_progress') { ?>
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
                <?php }
            }
        }
    }
    mysqli_close($link);
    ?>
</div>

    <?php
   

    $link = mysqli_connect('localhost', 'root', '', 'sa');

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $current_identify = $_SESSION['identify'];

    $sql = "SELECT DISTINCT identify, receiver_name, identify_level, SUM(unread_count) AS unread_count
    FROM (
        SELECT Account.identify, Account.name AS receiver_name, Account.identify_level,
                COALESCE(SUM(CASE WHEN message.is_read = 0 AND message.receiver_id = '$current_identify' THEN 1 ELSE 0 END), 0) AS unread_count
                FROM Account
                LEFT JOIN message ON Account.identify = message.sender_id
                WHERE Account.identify != '$current_identify' AND message.receiver_id = '$current_identify'
                GROUP BY Account.identify, Account.name, Account.identify_level
        UNION
        SELECT Account.identify, Account.name AS receiver_name, Account.identify_level,
                COALESCE(SUM(CASE WHEN message.is_read = 0 AND message.receiver_id = '$current_identify' THEN 1 ELSE 0 END), 0) AS unread_count
                FROM Account
                LEFT JOIN message ON Account.identify = message.receiver_id
                WHERE Account.identify != '$current_identify' AND message.sender_id = '$current_identify'
                GROUP BY Account.identify, Account.name, Account.identify_level
    ) AS combined_results
    GROUP BY identify, receiver_name, identify_level
    
    ";



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
    <!-- <span class="unread-count"></span> -->

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

      <button onclick="sendMessage()" class="send-btn"><i class="fas fa-paper-plane" style="font-size:18px"></i></button> 
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
       
          if ($contact['identify_level'] == 'member') {
            echo '<a href="viewuser2.php?identify=' . $contact['identify'] . '"><span class="flaticon-pawprint-1 mr-2" style="margin-left: 5px; color: black;"></span></a>';
          }
        
          if ($contact['identify_level'] == 'adopter') {
          echo '<a href="viewuser.php?identify=' . $contact['identify'] . '"><span class="flaticon-pawprint-1 mr-2" style="margin-left: 5px;"></a>';
          }
          // 在這裡添加未讀訊息數量的代碼，並添加 data-identify 屬性
          if ($contact['unread_count'] > 0) {
            echo '<span class="unread-count" data-identify="' . $contact['identify'] . '">' . $contact['unread_count'] . '</span>';
          }
          echo '</div>';
      }
      ?>

    </div>
<!-- 寵物收藏彈跳視窗 -->
<div align="center">
<div id="myModal" class="modal">
    <div class="modal-content" style="width: 200px;height: 100p;margin:30px;">
        <span class="close">&times;</span>
        <p id="modalMessage" style="text-align:center;line-height:50px;"></p>
    </div>
</div>
</div>
    
          
		</footer>

    
  

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
  <script src="https://kit.fontawesome.com/810f7f9a71.js" crossorigin="anonymous"></script>
  <script>
      function toggleChat() {
        var chatPopup = document.getElementById("chatPopup");
        var chatIcon = document.querySelector(".chat-icon");
        if (chatPopup.style.display === "block") {
          chatPopup.style.display = "none";
          chatIcon.style.display = "flex"; 
          
        } else {
          chatPopup.style.display = "block";
          chatIcon.style.display = "none"; // 隱藏小圖標
          hideContactsList(); 
          
        }
      }

      function toggleContactsList() {
        var contactsList = document.getElementById("contactsList");
        if (contactsList.style.display === "block") {
          contactsList.style.display = "none";
        } else {
          contactsList.style.display = "block";
        }
      }

      function hideContactsList() {
        var contactsList = document.getElementById("contactsList");
        contactsList.style.display = "none";
      }

      function openChat(identify, accountName) {
        var chatPopup = document.getElementById("chatPopup");
        var chatIcon = document.querySelector(".chat-icon");
        chatPopup.style.display = "block";
        chatIcon.style.display = "none"; 
        hideContactsList(); 
        
        var chatUserName = document.getElementById("chatUserName");
        chatUserName.innerText = accountName;
        chatUserName.setAttribute("data-receiver-id", identify);
        chatUserName.setAttribute("data-receiver-name", accountName);
        
        loadChatMessages(identify);
        
        updateUnreadCounts();
        updateTotalUnreadCounts();
       
      }

      function loadChatMessages(receiverIdentify) {
            var chatMessages = document.getElementById("chatMessages");
            var currentIdentify = "<?php echo $current_identify; ?>";
            var firstMessageTimestamp = null; 

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var messages = JSON.parse(xhr.responseText);
                        chatMessages.innerHTML = "";
                        messages.forEach(function(message) {
                            var alignmentClass = (message.sender_id == currentIdentify) ? 'text-right' : 'text-left';
                            var messageDiv = document.createElement("div");
                            messageDiv.className = "message " + alignmentClass;
                            if (message.content.startsWith('img/')) {
                                var img = document.createElement("img");
                                img.src = message.content;
                                img.style.maxWidth = "100%";
                                messageDiv.appendChild(img);
                            } else {
                                messageDiv.textContent = message.content;
                            }

                            var messageDate = new Date(message.timestamp).toLocaleDateString();
                            if (messageDate !== firstMessageTimestamp) {
                                var dateDiv = document.createElement("div");
                                dateDiv.className = "timestamp";
                                dateDiv.textContent = messageDate;
                                dateDiv.style.textAlign = "center"; 
                                chatMessages.appendChild(dateDiv); 
                                firstMessageTimestamp = messageDate;
                            }

                            var timestamp = new Date(message.timestamp).toLocaleTimeString('default', {
                                hour: '2-digit',
                                minute: '2-digit',
                            });
                            var timestampDiv = document.createElement("div");
                            timestampDiv.className = "timestamp";
                            timestampDiv.textContent = timestamp;
                            messageDiv.appendChild(timestampDiv);
                            chatMessages.appendChild(messageDiv);
                            
                            // 在這裡加入標記訊息為已讀的功能
                            if (currentIdentify === receiverIdentify && message.is_read === '0') {
                                markMessageAsRead(message.id);
                            }
                        });
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                    } else {
                        console.error("Failed to load chat messages");
                    }
                }
            };

            xhr.open("GET", "get_message.php?receiver_id=" + receiverIdentify, true);
            xhr.send();
        }
        
        function updateTotalUnreadCounts() {
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function() {
              if (xhr.readyState === XMLHttpRequest.DONE) {
                  if (xhr.status === 200) {
                      var totalUnreadCount = parseInt(xhr.responseText);
                      var chatIcon = document.querySelector('.chat-icon');
                      
                      var existingUnreadCountBadge = document.querySelector('.unread-count');
                      

                      if (totalUnreadCount > 0) {
                          var unreadCountBadge = document.createElement('span');
                          unreadCountBadge.classList.add('total-unread-count');
                          unreadCountBadge.textContent = totalUnreadCount;
                          chatIcon.appendChild(unreadCountBadge);
                      }
                      if (totalUnreadCount === 0) {
                        hideTotalUnreadCount();
                      }
                   } 
                  else {
                      console.error("Failed to update total unread counts");
                  }
              }
          };

          xhr.open("GET", "update_totalunread_counts.php", true);
          xhr.send();
      }
      function hideTotalUnreadCount() {
          var totalUnreadCountElement = document.querySelector('.total-unread-count');
          if (totalUnreadCountElement) {
              totalUnreadCountElement.style.display = 'none';
          }
      }




      window.addEventListener('load', function() {
          updateTotalUnreadCounts();
      });

        
        // 新增函數以標記訊息為已讀
        function markMessageAsRead(messageId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // 訊息已標記為已讀
                        console.log("Message marked as read.");
                    } else {
                        console.error("Failed to mark message as read");
                    }
                }
            };

            xhr.open("GET", "mark_message_as_read.php?message_id=" + messageId, true);
            xhr.send();
        }

        
      function sendMessage() {
        var chatInput = document.getElementById("chatInput");
        var chatMessages = document.getElementById("chatMessages");
        var receiverIdentify = document.getElementById("chatUserName").getAttribute("data-receiver-id");
        var content = chatInput.value.trim();

        if (content === "") {
          return;
        }

        var timestamp = new Date().toISOString();

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              chatInput.value = "";
              loadChatMessages(receiverIdentify);
            } else {
              console.error("Failed to send message");
            }
          }
        };

        xhr.open("POST", "send_message1.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("receiver_id=" + receiverIdentify + "&content=" + encodeURIComponent(content) + "&timestamp=" + timestamp);
      }

      function handlePhotoUpload() {
        var photoInput = document.getElementById("photoInput").files[0];
        var receiverIdentify = document.getElementById("chatUserName").getAttribute("data-receiver-id");
        var formData = new FormData();
        formData.append("photo", photoInput);
        formData.append("receiver_id", receiverIdentify);

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              loadChatMessages(receiverIdentify);
            } else {
              console.error("Failed to upload photo");
            }
          }
        };

        xhr.open("POST", "send_photo.php", true);
        xhr.send(formData);
      }

     function hideChatPopup() {
        var chatPopup = document.getElementById("chatPopup");
        var chatIcon = document.querySelector(".chat-icon");
        chatPopup.style.display = "none";
        chatIcon.style.display = "flex";

        var contactsList = document.getElementById("contactsList");
        contactsList.style.display = "block";
        updateUnreadCounts();
        updateTotalUnreadCounts();
            // 重新載入聊天圖示
        var chatIconReload = document.querySelector('.chat-icon');
        chatIconReload.innerHTML = "💬"; // 將聊天圖示重置為原始狀態
        
        
     }

     function updateUnreadCounts() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var contacts = JSON.parse(xhr.responseText);
                var unreadCounts = document.querySelectorAll('.unread-count');
                for (var i = 0; i < unreadCounts.length; i++) {
                    var identify = unreadCounts[i].getAttribute('data-identify');
                    for (var j = 0; j < contacts.length; j++) {
                        if (contacts[j].identify === identify) {
                            var unreadCount = contacts[j].unread_count;
                            // 更新未读计数
                            unreadCounts[i].textContent = unreadCount;
                              if (unreadCount > 0) {
                                  // 渐变显示
                                  unreadCounts[i].style.opacity = 1;
                              } else {
                                  // 渐变隐藏
                                  unreadCounts[i].style.opacity = 0;
                              }
                            break;
                        }
                    }
                }
            } else {
                console.error("Failed to update unread counts");
            }
        }
    };

    xhr.open("GET", "update_unread_counts.php", true);
    xhr.send();
}   
  </script>
  
<script>
    document.querySelectorAll('.bookmarkLink').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); 
            
              var loggedIn = <?php echo isset($_SESSION['identify']) ? 'true' : 'false'; ?>;
            if (!loggedIn) {
                showModal('請先登入');
                return;
            }
            var petId = this.dataset.petId;
            var identify = this.dataset.identify;
            var isBookmarked = this.classList.contains('bookmarked'); // 檢查是否已收藏
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'collection.php?pet_id=' + petId + '&identify=' + identify + '&action=' + (isBookmarked ? 'remove' : 'add'), true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    showModal(isBookmarked ? '已取消收藏' : '收藏成功');
                    // 更新按鈕狀態
                    if (isBookmarked) {
                        link.classList.remove('bookmarked');
                        var bookmarkIcon = link.querySelector('.bookmarkIcon');
                    } else {
                        link.classList.add('bookmarked');
                        var bookmarkIcon = link.querySelector('.bookmarkIcon');
                      
                    }
                } else {
                    console.error(isBookmarked ? '取消收藏失败' : '收藏失败');
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
  
<!-- <script>
    document.querySelectorAll('.bookmarkLink').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const petId = this.getAttribute('data-pet-id');
            const icon = this.querySelector('.bookmarkIcon');
            
            fetch('bookmark.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'pet_id=' + petId,
            })
            .then(response => response.text())
            .then(data => {
                if (data === 'bookmarked') {
                    icon.classList.remove('fa-bookmark-o');
                    icon.classList.add('fa-bookmark');
                } else if (data === 'unbookmarked') {
                    icon.classList.remove('fa-bookmark');
                    icon.classList.add('fa-bookmark-o');
                }
            });
        });
    });
</script> -->





  </body>
</html>
