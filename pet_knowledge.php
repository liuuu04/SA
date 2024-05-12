<!DOCTYPE html>
<html lang="en">
  <head>
    <title>寵物知識專區</title>
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
              <li class="nav-item"><a href="gallery.html" class="nav-link">寵物展</a></li>
            </ul>
          </div>
        </div>
        <div class="bells">
        <a href="#"><img src="images/bell.png" style="width: 30px;height: 30px;margin-right:20px;"></a>
        </div>
        <div class="dropdown">
        <?php  session_start(); ?>
          <button class="intromy"><a href="#"><img src="<?php echo $_SESSION['identify_photo']; ?>" style="border-radius: 50%;"><span><?php echo $_SESSION['name'];?></span></a></button>
            <div class="dropdown-content" id="intromyDropdown">
                <a href="view.php">查看個人檔案</a>
                <a href="pet_post_test.php">刊登寵物</a>
                <a href="#">查看已刊登的寵物</a>
                <a href="logout.php">登出</a>
            </div>
        </div>
        
      </div>
      </nav>
    <!-- END nav -->

    <div style="margin-top:70px;margin-bottom:10px;font-size:large;">
      <ul class="nav nav-underline justify-content-center">
        <li class="nav-item" style="margin-right:40px;">
          <a class="nav-link" href="#" onclick="showTab('section1')" style="color: #000;">寵物知識專區</a>
        </li>
        <li class="nav-item" style="margin-left:40px;">
          <a class="nav-link" href="#" onclick="showTab('section2')" style="color: #000;">常見問題</a>
        </li>
      </ul>
    </div>
    <hr style="margin: 20px 0; border-color: #000;">

  <!-- SESSION1 -->
    <div id="section1" style="display: none;margin:50px;">
      <p>aaaaa</p>
    </div>

  <!-- SESSION2 -->
  <div id="section2" style="display: none;margin-top:50px;margin-left:130px;margin-right:130px;margin-bottom:50px;">
      <div>
          <h3>• 狗</hˇ>
      </div>
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
              如果狗狗沒有足夠的活動空間會怎麼樣？
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body">
              <ol>
                <li>運動不足：如果狗狗沒有足夠的空間運動，就會變得懶散，運動量不足，這可能會導致肥胖、心血管疾病等健康問題。</li>
                <li>行為問題：狗狗需要進行適當的運動和活動，以消耗體力和精力，否則它們可能會表現出焦躁、破壞性行為、攻擊性和其他行為問題。</li>
                <li>健康問題：如果狗狗長時間被關在狹小的空間中，缺乏運動和活動，可能會引起關節疾病、肌肉萎縮等健康問題。</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              狗狗需要注射的疫苗有哪些？
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">
              <b>狗狗疫苗種類非常多，區分為「核心疫苗」與「非核心疫苗」兩大類</b>
              <ol>
                <li>核心疫苗：為預防「犬瘟熱、犬小病毒、犬傳染性肝炎、狂犬病」這些具高傳染性、高致死率的重大傳染病的疫苗。</li>
                <li>非核心疫苗：針對犬副流行感冒病毒、鉤端螺旋體、犬冠狀病毒、萊姆病等疾病的疫苗，在台灣屬非核心疫苗的範疇。</li>
              </ol>
              <b>養狗狗需要施打的疫苗有以下幾種：</b>
              <ol>
                <li>狂犬病疫苗：狗狗必須在3個月大時接種第一劑，之後每年注射一次。這是狗狗最重要的疫苗，因為狂犬病是一種致命的疾病，可以對人類造成嚴重的健康危害。</li>
                <li>五合一疫苗：包括了犬瘟熱、犬咳嗽、犬弓形蟲、犬肝炎和犬冠狀病毒的預防。第一次施打在狗狗2個月大時，之後每年注射一次。</li>
                <li>狗瘟熱疫苗：犬瘟熱是一種嚴重的病毒性疾病，可以對狗狗的呼吸、消化和神經系統造成嚴重的損害。第一次施打在狗狗6週大時，之後每年注射一次。</li>
                <li>犬冠狀病毒疫苗：這種病毒會導致狗狗的胃腸不適和腹瀉。第一次施打在狗狗6週大時，之後每年注射一次。</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              狗狗需要多少運動量呢？
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">
              <b>不同體型與體重的狗狗，需要的運動量也不盡相同。</b> 
              <br><br>
              體型越大所需運動量也相對較多，所以養狗後每天一定要預留讓狗狗外出散步的時間。<br>
              有些狗狗不喜歡在室內大小便，更應該把握在戶外的時間上廁所，也可避免憋尿、水喝少或便秘等情況。
            </div>
          </div>
        </div>
      </div>

      <!-- 貓 -->
      <div style="margin-top: 50px;">
          <h3>• 貓</hˇ>
      </div>
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
            養貓前需要準備哪些日用品？
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body">
              <ol>
                <b><li>貓飼料、罐罐：</li></b>
                建議可以先依據貓咪年紀適量購買飼料、主食罐，再依據貓咪的食用習慣以及喜好進行調整。
                <b><li>貓砂、貓砂盆、小鏟子（挖貓咪排泄物）:</li></b>
                貓咪需要上廁所的地方，所以準備貓砂和貓砂盆很重要。
                <b><li>水碗、食碗：</li></b>
                準備乾淨的水碗和食碗是必要的，因為貓咪很愛乾淨，所以建議使用全新的碗。<br>
                <b><li>貓窩或自製睡床：</li></b>
                貓咪熟識環境後通常會找到自己的專屬角落，但提前先準備一個睡床可以讓不熟悉的貓咪先有個暫時休息的地方。
                <b><li>貓抓板或紙箱：</li></b>
                貓咪不熟悉環境可能就會焦慮想抓撓，或者是因為長指甲還需要磨指甲，先購置好一塊貓抓板可以防止家具或貴重物品被抓壞，也可以準備紙箱給貓咪抓撓。
                <b><li>外出籠：</li></b>
                外出籠可以幫助毛爸媽帶回新的貓咪，也是帶貓咪外出的必備用品。<br>
                建議選購<b>不易逃脫且可以通風</b>的款式，不要讓貓咪悶到。
                <b><li>貓跳台、逗貓棒</li></b>
                可以適度的買一兩樣就可以了。<br>
                讓貓咪適度運動很重要，<b>貓跳台</b>可以讓貓咪盡情玩耍，發揮自然的野性本能，對於好動的幼貓來說也是一個不錯的購置選項。
                <b>逗貓棒</b>則是可以讓貓咪有和你互動的機會，但一開始不要買太多，因為貓咪個性不同，有的貓咪很快就玩膩了，有的貓咪則會持續追逐同一隻逗貓棒，可以多多觀察。
              </ol>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            養貓一個月花費，新手應該準備多少錢？
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">
              養貓除了日常的固定開銷，像是：貓砂、貓飼料或鮮食之外，還有植入晶片、健康檢查、日常除蟲、疫苗、貓咪結紮 …… 等花費。<br>
              簡單來說，除了日常食品和用品，還要準備醫療備用金，應付日常的健康檢查以及貓咪突然生病的花費。<br><br>

              <b>開銷項目：</b>
              <ul>
                <b><li>植入晶片：</li></b>300 ～ 500 元＋登記費用（約 500 ～1,000 元）
                <b><li>伙食費：</li></b>每個月約 1,000 ～ 3,000 元不等
                <b><li>施打疫苗:</li></b>三合一疫苗 500 ～ 900 、五合一疫苗 800 ～ 1,000 元、狂犬病疫苗 300 元左右
                <b><li>其他開銷（玩具、貓砂等日用品）：</li></b>300 ～ 5,000元 / 月
                <b><li>貓咪結紮：</li></b>公貓 2,000 ～ 3,000 元、母貓 3,000 ～ 4,000 元
                <b><li>驅蟲藥 / 滴劑：</li></b>每月一次，約 500 ～ 1,000 元不等
                <b><li>醫療費：</li></b>生病時會有的花費，約 500 元 ～ 上萬元不等
              </ul>
              伙食費和其他開銷都是日常生活中持續性的花費，疫苗則是每 1 ～ 3 年會有的花費。<br>
              <b>一開始會先付出的費用為健康檢查、驅蟲、疫苗、打晶片和登記費用（ 約 2,000 ～ 3,800 元不等）</b>，後續會每月持續產生的就是伙食費以及一些雜支。
              根據經驗分享，大部分的毛爸媽<b>一個月會花費 1,000 ～ 3,000 元</b>在貓咪身上，如果有添購保健食品、日用品、玩具……等項目，花費就會稍微提升。
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              適合的養貓環境&居家空間布置
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">
              貓咪是很重視環境的動物，好的生活空間可以讓貓咪更快適應。<br><br>

              <b>規劃重點：</b>
              <ol>
                <b><li>完善的活動空間：</li></b>規劃出幾個活動區塊，周邊留下足夠空間，像是：食碗和水碗、貓砂盆、貓跳台等，都建議在周邊留下一些空間。
                <b><li>貓砂盆、食碗、水碗要分開擺放：</li></b>貓砂盆不要放在食碗或水碗旁邊，因為這等於叫貓咪在廁所旁邊吃飯喝水，其實對於貓咪來說會不太舒服。食碗和水碗也盡量分開擺放，以免飲水被感染導致貓咪不喝水。
                <b><li>更換窗簾、沙發、地毯等家具設備：</li></b>窗簾和沙發都可以使用<b>貓抓布或貓抓皮</b>，這種材質的布料因為耐磨擦，可以降低貓咪抓咬的慾望。使用<b>寵物地毯</b>也可以降低貓咪跳躍到地板上的傷害。
                <b><li>保持環境和物品的潔淨：</li></b>貓咪是很愛乾淨的動物，如果食碗或水碗被汙染，貓咪可能會不吃不喝，也會拒絕在骯髒的貓砂盆內上廁所，導致影響健康。
                <b><li>保護措施：</li></b>新來的貓咪可能會害怕環境而想要逃家，所以如果家中有對外窗，要特別做好<b>防護措施加裝防護網</b>，避免貓咪跳出窗外受傷或失蹤。
              </ol>
            </div>
          </div>
        </div>
      </div>
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

    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', () => {
            if (!button.classList.contains('collapsed')) {
                // 非折疊狀態下
                btttun.stlye.backgroundColor= '#DBD2C9';
                button.style.borderColor = '#DBD2C9';
                button.style.boxShadow = '0 0 10px #DBD2C9';
            } else {
                // 折疊狀態下
                button.style.borderColor = 'DBD2C9'; 
                button.style.boxShadow = '0 0 10px #DBD2C9';
            }
        });
    });

    </script>

  </body>
</html>