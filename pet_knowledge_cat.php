<?php  session_start(); ?>
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
    <link rel="stylesheet" href="css/select.css">
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

    
    .suggest {
            border-radius: 5px;
            border: 3px solid;
            border-color: #dbd2c9;
            padding: 15px;
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
              <li class="nav-item "><a href="index.php" class="nav-link">首頁</a></li>
              <li class="nav-item dropdown active">
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
    <!-- END nav -->

    <div style="margin-top:70px;margin-bottom:10px;font-size:large;">
      <ul class="nav nav-underline justify-content-center">
        <li class="nav-item" style="margin-right:40px;float:inline-start;" >
          <a class="nav-link" href="#" style="color: #000;" >貓-</a>
        </li>
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

    <!-- 索引 -->
    <div id="section1" style="display: block;margin-top:50px;margin-left:130px;margin-right:130px;margin-bottom:50px;">
      <div style="margin-bottom:10px;">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <button class="pet-btn" onclick="scrollToElement('breed')">常見品種</button>
          </li>
          <li class="nav-item">
            <button class="pet-btn" onclick="scrollToElement('health')">健康護理</button>
          </li>
          <li class="nav-item">
            <button class="pet-btn" onclick="scrollToElement('behavier')">行為訓練</button>
          </li>
          <li class="nav-item">
            <button class="pet-btn" onclick="scrollToElement('eat')">飲食建議</button>
          </li>
          <li class="nav-item">
            <button class="pet-btn" onclick="scrollToElement('emergency')">緊急應變</button>
          </li>
          <li class="nav-item">
            <button class="pet-btn" onclick="scrollToElement('suggest')">寵物知識建議</button>
          </li>
        </ul>
      </div>
      <!-- 索引end -->

      <!-- 常見品種 -->
      <div class="pet-knowledge" id="breed">
        <h5><b>常見品種：</b></h5>
        <ul>
          <li>貓：</li>
            <ol>
              <li>米克斯貓（Mix ）</li>
              <li>布偶貓（Ragdoll ）</li>
              <li>英國短毛貓（British Shorthair ）</li>
              <li>美國短毛貓（American Shorthair ）</li>
              <li>塞爾凱克捲毛貓（Selkirk Rex ）</li>
              <li>緬因貓（Maine Coon Cat ）</li>
              <li>蘇格蘭摺耳貓（Scottish Fold ）</li>
              <li>斯芬克斯貓（Sphynx ）</li>
              <li>波斯貓（Persian ）</li>
              <li>西伯利亞貓（Siberian ）</li>
              <li>阿比西尼亞貓（Abyssinian ）</li>
              <li>伯曼貓（Birman ）</li>
              <li>孟加拉貓（Bengal ）</li>
              <li>暹羅貓（Siames ）</li>
            </ol>
        </ul>
      </div>

      <!-- 健康護理 -->
      <div class="pet-knowledge" id="health" style="margin-top:30px;">
        <h5><b>健康護理：</b></h5>
        <ul>
          <br>
            <div style="padding-left:35px;padding-right:35px;">
              <p >養貓咪是一個非常有趣和充滿挑戰的過程。當您準備好開始養貓咪時，您需要了解如何照顧它們的健康和生活習慣，並且為它們提供適當的器具和設備。同時，您還需要為貓咪負起責任，並為它們提供足夠的愛和關心。以下幾點能夠幫助您成為一個成功的貓奴！</p>
              <ol>
                <li><b>貓咪飲食器的位置應該遠離貓砂盆，同時應該經常清洗。</b></li>
                <li><b>貓咪窩應該放置在安靜、乾燥、溫暖的地方，讓貓咪可以有一個舒適的休息環境。</b></li>
                <li><b>餵食時避免過多，貓咪需要控制飲食量。</b></li>
                  <p>貓咪吃撐了除了會導致消化不良等一些腸胃疾病，還會使貓咪出現反胃嘔吐的症狀。貓咪更適合少量多餐喔！</p>
                <li><b>定期修剪指甲</b></li>
                  <p>貓咪的指甲需要定期修剪，以防它們刮傷人和物品喔。</p>
                <li><b>定期清洗和梳理毛髮。</b></li>
                  <p>貓咪非常愛乾淨，為了保持貓咪的健康和舒適，請定期為它們進行清洗和梳理毛髮。</p>
                <li><b>定期除蟲</b></li>
                  <p>為貓咪定期進行除蟎處理，以防止跳蚤、蝨子等寄生蟲。</p>
              </ol>
            </div>
        </ul>
      </div>

      <!-- 行為訓練 -->
      <div class="pet-knowledge" id="behavier" style="margin-top:30px;">
        <h5><b>行為訓練：</b></h5>
        <div style="padding-left:35px;padding-right:35px;">
            <p>寵物行為訓練課程是近年來的新趨勢，訓練的目的並非讓毛孩學會各式技能，也不是藉此樹立飼主的威嚴；主要是希望透過訓練，建立起飼主與毛孩之間的溝通管道，矯正毛孩吠叫、暴衝、啃咬或隨地大小便等行為，解決飼主在生活中遇到的困擾，並推廣正確的毛孩照護知識。</p>
            <p>訓練並不是要讓貓狗服從，而是讓狗狗透過你的引導，一起學會與人共處的方式；並且需要持續不斷反覆的練習。任何時候都是訓練的好時機：吃飯、散步、遊戲、甚至是幫牠洗澡、帶牠去醫院等。將行為教育無時無刻落實在生活中，狗狗會學得更快更好，也能與飼主培養感情與信任。</p>
            <p><b>那什麼情況下適合找寵物行為訓練師？</b><br>
            貓狗懂得辨別環境資訊，因此人類平常認為犬貓失控的行為，通常是牠們在反映生活中的需求與壓力來源。此外，犬貓善於觀察人類的肢體語言，若飼主用錯誤的方式與之相處，也可能間接養成犬貓的「不良習慣」。當飼主不確定生活中哪個環節出了狀況，或不清楚該如何正確地與毛孩相處時，建議可以尋求寵物行為訓練師的協助。
              寵物行為訓練師能在授課過程中察覺寵物問題，並協助改變家中環境配置、移除或降低壓力源等。而在訓練過程中，飼主必須和毛孩一同學習，因為影響毛孩行為的主要因素，除了環境之外，還有飼主本身與寵物互動的態度和方式。藉由正確的調整行為模式，並提供毛孩紓壓的活動，有助於達成平衡的人寵生活。
            </p>
        </div>
      </div>

      <!-- 飲食建議 -->
      <div class="pet-knowledge" id="eat" style="margin-top:30px;">
        <h5><b>飲食建議：</b></h5>
        <p style="margin-left:35px;margin-right:35px;">現在社會環境惡劣以及食安問題頻頻發生，建立正確的飲食觀念不僅在人的健康上很重要，對於家中心愛的毛小孩也是一個重要的課題，多用點心，花一點點時間可以減少許多不必要的花費及擔心。只要能選擇正確的食物，毛小孩就能健健康康的過生活。你能多用一份心，毛小孩就會少受一份苦。</p>
        <div>
            <ol style="padding-left:50px;padding-right:35px;">
                <li><b>肉食性動物</b></li>
                  <p>貓咪為完全肉食性動物，所以蛋白質的需求會比人及狗來的多，蛋白質對於成長中的貓咪或是成年貓是必要的養分，因此倘若食物的蛋白質含量降低或是不足會造成成長遲緩或是營養失衡造成活力變差、抵抗力下降等問題。</p>
                  <p><b>動物性的蛋白質</b>比<b>植物性蛋白質</b>更適合貓咪，尤其是牛磺酸對貓咪而言是重要的氨基酸，貓咪體內僅能少量合成，若無法從食物中獲得足夠的牛磺酸，則會引起貓咪視力障礙及心臟疾病發生。</p>
                  <p>因此貓咪較<b>不適合</b>給予素食的飼料和食物，這是非常重要的觀念，有許多貓咪因為吃素而造成營養不良產生許多營養性疾病。</p>
                  <p>貓咪的食物中另外一個能量來源就是<b>脂肪</b>，也是對於脂溶性維生素的吸收相對上也是非常重要，脂肪中的必需脂肪酸(ω3和ω6)，對於皮膚或是腸胃道發炎的貓咪是相當重要的營養素，但是若是過量的攝取脂肪含量過高的食物或是飼料則會造成肥胖、消化障礙或是脂肪痢，也會造成營養不均衡。</p>
                <li><b>不能吃的人類食物</b></li>
                  <ul>
                    <li><b>加了許多調味料的食物</b></li>
                      <p>人類平常吃的便當菜餚，對我們來說味道剛好，但貓咪的腎臟遠小於人類，這些又鹹又油的食物會對他們的腎臟造成極大的負擔。</p>
                      <p>食物佐料如洋蔥、蔥、蒜、薑等，因為含有硫化物，動物無法代謝會造成紅血球變形產生溶血性貧血;<br>
                      水果如楊桃、香蕉、葡萄、櫻桃等，有些是腎衰竭動物不能食用或是會引起腎衰竭，建議不要餵食。，過量時輕則出現腸胃不適、下痢、嘔吐，嚴重的話會有生命危險。</p>
                    <li><b>醃製品</b></li>
                      <p>醃製食物多添加亞硝酸鹽、色素，或大量糖、鹽等調味料，即使是人吃多了也不好，對貓更容易造成危害。</p>
                    <li><b>牛奶</b></li>
                      <p>大多數貓咪都有乳糖不耐症，喝牛奶會讓他們拉肚子，如果是幼貓，太嚴重的腹瀉是有可能致命的!</p>
                    <li><b>含咖啡因的食物</b></li>
                      <p>包含茶、咖啡、可樂等，都會對貓咪狗狗的心臟及中樞神經造成影響。</p>
                    <li><b>可可、巧克力</b></li>
                      <p>巧克力中的可可鹼對貓咪狗狗有毒，且不易代謝，食用少量可導致嘔吐與腹瀉，若大量食用會導致過動、顫抖、高血壓、心跳過快、癲癇、呼吸衰竭、以及心臟驟停等症狀。</p>
                    <li><b>酒精</b></li>
                      <p>貓咪狗狗攝取酒精飲料、發酵的食物和含有酵母的食物會因肺部衰竭導致死亡。</p>
                    <li><b>鮑魚、海螺</b></li>
                      <p>吃下鮑魚或海螺的貓咪照到光線後會紅腫發癢，特別容易發生在被毛稀疏的耳朵上，導致皮膚炎。</p>
                  </ul>
                <li><b>維生素＆礦物質</b></li>
                  <p>維生素的部分，一般若是給予飼料的狀況，大部分維生素的含量都會足夠，也因此比較少出現維生素不足的症狀或病症，但是貓咪對於維生素B群的攝取量很高
                    ，倘若貓咪處於生病狀態，應給予額外補充的維生素B群。<br>
                    另外貓咪和其他動物不同，身體無法合成維生素A和維生素D，僅能依靠從食物中取得。
                    有肝病或厭食的貓咪應該額外補充維生素E和維生素K。而維生素A、D、E、K皆是脂溶性維生素，在補充上或是使用上要特別小心，
                    建議需要諮詢專業的動物醫師來給予補充劑量，千萬不要自行添加。</p>
              </ol>
        </div>  
      </div>

      <!-- 緊急應變 -->
      <div class="pet-knowledge" id="emergency" style="margin-top:30px;">
        <h5><b>緊急應變：</b></h5>
        <div style="margin-left:15px;">
          <p>當大型災難來臨，人類知道或許知道如何保護自己，但家中的寵物就不一定了。遇到緊急狀況需要立刻離開時，為自家毛孩所做的準備就非常關鍵了！</p>
          <p><b>以下是寵物主人在緊急情況下，常見的應變措施：</b></p>
          <ul>
            <li><b>基本急救知識</b></li>
              <p>學習基本的寵物急救知識，包括如何處理受傷、窒息、中毒等情況。</p>
            <li><b>寵物避難包</b></li>
              <ol>
                <div style="color:#000">避難包至少應備齊：</div>
                <li><b>攜帶能夠長期保存的乾糧（或罐頭）、水，至少 3~5天的份量</b></li>
                <li><b>備用項圈、無彈性的牽繩（避免寵物暴衝，無彈性的繩子較理想）</b></li>
                <li><b>緊急藥物與醫療包</b></li>
                <li><b>能讓寵物安心的毯子或玩具</b></li>
                <li><b>外出籠平時應放在家中明顯處，讓寵物習慣進出</b></li>
                <li><b>寵物用尿布墊、禮貌帶，貓砂、撿便袋</b></li>
                <li><b>外出用的碗與水壺</b></li>
                <li><b>寵物身分證明（如晶片、項圈）、載明預防針紀錄的健康手冊、鄰近地區的醫院資料、餵養時間建議表</b></li>
                <li><b>沖洗數張寵物實體照片備用，寵物走失時會需要指認</b></li>
                <li><b>嘴套、頭套、保護腳底的襪子</b></li>
              </ol>
            <li><b>緊急撤離計劃</b></li>
              <p> 制定寵物緊急撤離計劃，包括確定安全的避難所和準備寵物所需的物品，如食物、水、醫療記錄、應急聯繫人等。</p>
            <li><b>保持冷靜：</b></li>
              <p>飼主如果無法冷靜，寵物也會被你的情緒影響，因此請先確認自己的狀況無虞，再進行安撫。</p>
          </ul>
        </div>
      </div>
      <div id="suggest">
      <p style="margin-top:30px;font-size:22px;color:black;">寵物知識建議</p>
      <p style="font-size:15px;">歡迎在這裡提供您對寵物知識專區的建議</p>
    <div class="suggest col-md-12">
        <form action="" method="post" class="appointment">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <header style="margin-left: 10px;">建議類別</header>
                                    <div class="icon"><span class="fa fa-chevron-down" style="margin-top: 33px;"></span></div>
                                    <select name="categories" id="categories" class="form-control" required>
                                        <option disabled selected hidden>&nbsp&nbsp--請選擇--</option>
                                        <option value="常見品種">常見品種</option>
                                        <option value="健康護理">健康護理</option>
                                        <option value="行為訓練">行為訓練</option>
                                        <option value="飲食建議">飲食建議</option>
                                        <option value="緊急應變">緊急應變</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <header style="margin-left: 10px;">種類</header>
                                    <div class="icon"><span style="margin-top: 33px;"></span></div>
                                    <select name="type" id="type" class="form-control" style="border: 1px; border-color:#dbd2c9;">
                                        <option value="貓">貓</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <header style="margin-left: 10px;">建議內容</header>
                            <textarea name="content" id="content" cols="30" rows="7" class="form-control" placeholder="&nbsp&nbsp請輸入..." required></textarea>
                        </div>
                    </div>
                    <div class="col-md-2 offset-md-5" style="margin-top: 20px;">
                        <div class="form-group" text-align: center;>
                            <input type="submit" value="提交" class="selectbtn btn-primary py-2 px-3" style="font-size:16px;">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div align="center">
        <div id="myModal" class="modal">
            <div class="modal-content" style="width: 200px;height: 100p;margin:30px;">
                <span class="close">&times;</span>
                <p id="modalMessage" style="text-align:center;line-height:50px;"></p>
            </div>
        </div>
    </div>
      </div>





      <button onclick="scrollToTop('section1')" id="back-to-top-section1" title="回到頂部"><span>&#8593;</span></button>
    </div>



  <!-- SESSION2 -->
  <div id="section2" style="display: none;margin-top:50px;margin-left:130px;margin-right:130px;margin-bottom:50px;">
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cat1" aria-expanded="True" >
            養貓前需要準備哪些日用品？
            </button>
          </h2>
          <div id="cat1" class="accordion-collapse collapse show">
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cat2" aria-expanded="false" >
            養貓一個月花費，新手應該準備多少錢？
            </button>
          </h2>
          <div id="cat2" class="accordion-collapse collapse">
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cat3" aria-expanded="false" >
              適合的養貓環境&居家空間布置
            </button>
          </h2>
          <div id="cat3" class="accordion-collapse collapse">
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
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cat4" aria-expanded="false" >
            貓咪不能碰到的「植物」、「水果、食物」
            </button>
          </h2>
          <div id="cat4" class="accordion-collapse collapse">
            <div class="accordion-body">
              <ul>
                <li><b>植物：</b></li>
                  <ul>
                    <li>百合</li>
                    <li>杜鵑花</li>
                    <li>仙客來</li>
                    <li>虎尾蘭</li>
                    <li>花葉萬年青（黃金葛）</li>
                    <li>家樂花（長壽花）</li>
                    <li>夾竹桃</li>
                    <li>毛地黃</li>
                    <li>琉球蘇鐵</li>
                    <li>鬱金香</li>
                    <li>風信子</li>
                  </ul>
                <li><b>水果、食物：</b></li>
                  <ul>
                      <li><b>加了許多調味料的食物</b></li>
                        <p>人類平常吃的便當菜餚，對我們來說味道剛好，但貓咪的腎臟遠小於人類，這些又鹹又油的食物會對他們的腎臟造成極大的負擔。</p>
                      <li><b>蔥、蒜、洋蔥、薑</b></li>
                        <p>因為含有硫化物，動物無法代謝會造成紅血球變形產生溶血性貧血;會破壞貓咪的血蛋白，引發黃血症狀</p>
                      <li><b>葡萄</b></li>
                        <p>引發貓咪腎衰竭，嚴重會導致休克。</p>
                      <li><b>柑橘類水果</b></li>
                        <p>會刺激貓咪腸胃，並且讓貓咪血管壞死，引發嘔吐，嚴重時甚至會死亡。</p>
                      <li><b>酪梨</b></li>
                        <p>酪梨的果實、果核、果皮和葉子中含有「酪梨素」（persin）會導致貓狗嘔吐腹瀉，嚴重時甚至會死亡。</p>
                      <li><b>櫻桃：</b></li>
                        <p>種子（果核）、蒂頭、莖等部位含有微量氰化物，若吞食下去可能會導致哽塞或中毒。</p>
                      <li><b>柿子</b></li>
                        <p>柿子種子會讓貓咪的消化道產生問題，導致腸阻塞、腹瀉和發燒。</p>
                      <li><b>醃製品</b></li>
                        <p>醃製食物多添加亞硝酸鹽、色素，或大量糖、鹽等調味料，即使是人吃多了也不好，對貓更容易造成危害。</p>
                      <li><b>牛奶</b></li>
                        <p>大多數貓咪都有乳糖不耐症，喝牛奶會讓他們拉肚子，如果是幼貓，太嚴重的腹瀉是有可能致命的!</p>
                      <li><b>含咖啡因的食物</b></li>
                        <p>包含茶、咖啡、可樂等，都會對貓咪狗狗的心臟及中樞神經造成影響。</p>
                      <li><b>可可、巧克力</b></li>
                        <p>巧克力中的可可鹼對貓咪狗狗有毒，且不易代謝，食用少量可導致嘔吐與腹瀉，若大量食用會導致過動、顫抖、高血壓、心跳過快、癲癇、呼吸衰竭、以及心臟驟停等症狀。</p>
                      <li><b>酒精</b></li>
                        <p>貓咪狗狗攝取酒精飲料、發酵的食物和含有酵母的食物會因肺部衰竭導致死亡。</p>
                      <li><b>鮑魚、海螺</b></li>
                        <p>吃下鮑魚或海螺的貓咪照到光線後會紅腫發癢，特別容易發生在被毛稀疏的耳朵上，導致皮膚炎。</p>
                    </ul>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <button onclick="scrollToTop('section2')" id="back-to-top-section2" title="回到頂部"><span>&#8593;</span></button>

  </div>


  <script>
        function showModal(message) {
            var modal = document.getElementById('myModal');
            var modalMessage = document.getElementById('modalMessage');
            modalMessage.textContent = message;
            modal.style.display = 'block';
            setTimeout(function() {
                modal.style.display = 'none';
            }, 3000);
        }
    </script>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $categories = $_POST['categories'];
            $type = $_POST['type'];
            $content = $_POST['content'];
            $time = date('Y-m-d H:i:s');
            $link = mysqli_connect('localhost', 'root', '', 'sa');

            if (!$link) {
                echo "<script>showModal('数据库连接失败');</script>";
                exit();
            }

            $sql = "INSERT INTO suggest (categories, type, content, time) VALUES ('$categories', '$type', '$content', NOW())";

            if (mysqli_query($link, $sql)) {
                echo "<script>showModal('提交成功');</script>";
            } else {
                echo "<script>showModal('提交失败');</script>";
            }

            mysqli_close($link);
        }
    ?>

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