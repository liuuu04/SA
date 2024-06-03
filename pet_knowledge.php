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

    .suggest {
            border-radius: 5px;
            border: 3px solid;
            border-color: #dbd2c9;
            padding: 15px;
        }

        .modal-content {
            background-color: #dbd2c9;
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
  <?php  session_start(); ?>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>寵物領養平台</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item "><a href="index.php" class="nav-link">首頁</a></li>
              <li class="nav-item active"><a href="pet_knowledge.php" class="nav-link">寵物知識專區</a></li>
              <li class="nav-item"><a href="services.html" class="nav-link">討論區</a></li>
              
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
          <li><b>狗：</b></li>
            <p>一般分成&nbsp;迷你犬 ( 4公斤以下 )、小型犬 ( 5 ~ 10公斤 )、中型犬 (11 ~ 25公斤)、大型犬 ( 超過25公斤 )，常見品種有以下：<br></p>
            <ul>
              <li><b>迷你犬：</b></li>
              <ol>
                  <li>吉娃娃（Chihuahu ）</li>
                  <li>博美犬（Pomerania ）</li>
                  <li>約克夏（Yorkshire Terrier）</li>
                  <li>馬爾濟斯（Maltese ）</li>
              </ol>
            </ul><br>
            <ul>
              <li><b>小型犬：</b></li>
              <ol>
                  <li>米克斯犬（Mix ）</li>
                  <li>臘腸犬（Dachshund ）</li>
                  <li>迷你貴賓犬（Miniature Poodle ）</li>
                  <li>法國鬥牛犬（French Bulldog ）</li>
                  <li>比熊犬（Bichon Frise ）</li>
                  <li>西施犬（Shih Tzu ）</li>
                  <li>迷你雪納瑞 （Miniature Schnauzer ）</li>
                  <li>狐狸犬（Japanese Spitz ）</li>
                  <li>巴哥犬（Pug ）</li>
                  <li>西高地白梗（West Highland White Terrier ）</li>
              </ol>
            </ul><br>
            <ul>
              <li><b>中型犬：</b></li>
              <ol>
                  <li>柴犬（Shiba Inu ）</li>
                  <li>柯基（Welsh Corgi ）</li>
              </ol>
            </ul>
            <ul>
              <li><b>小型犬：</b></li>
              <ol>
                  <li>臘腸犬（Dachshund ）</li>
                  <li>迷你貴賓犬（Miniature Poodle）</li>
                  <li>法國鬥牛犬（French Bulldog）</li>
                  <li>比熊犬（Bichon Frise）</li>
                  <li>西施犬（Shih Tzu）</li>
                  <li>迷你雪納瑞（Miniature Schnauzer ）</li>
                  <li>狐狸犬（Japanese Spitz ）</li>
                  <li>巴哥犬（Pug ）</li>
                  <li>西高地白梗（West Highland White Terrier ）</li>
              </ol>
            </ul><br>
            <ul>
              <li><b>大型犬：</b></li>
              <ol>
                  <li>拉不拉多（Labrador Retriever ）</li>
                  <li>黃金獵犬（Golden Retriever ）</li>
                  <li>哈士奇（Siberian Husky ）</li>
                  <li>沙皮犬（Shar Pei ）</li>
                  <li>杜賓犬（Doberman Pinscher ）</li>
                  <li>大丹犬（Great Dane ）</li>
              </ol>
            </ul><br>

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
          <li><b>狗：</b></li>
          <div style="padding-left:15px;">
            <p>狗狗的壽命通常都是10多年。小型犬的壽命通常比大一些的犬類要長。不論飼養什麼品種的狗狗，要想讓它與我們相伴得更長久，飼主要給予愛犬細心、周到的健康護理。以下這9個方面，都是影響狗狗健康的重要因素。</p>
            <ol>
              <li><b>每天運動</b></li>
                <p>長時間缺乏運動的狗容易變得肥胖——這會增加它們罹患各種疾病的風險。尤其是年紀較大的狗，它們的關節比較脆弱，甚至已經患有關節炎，那麼太大的體重就會進一步壓迫它們的關節。</p>
                <p>盡量每天帶狗狗外出活動，最好讓狗狗在寬敞的地方盡情奔跑。</p>
              <li><b>情感關照</b></li>
                <p>狗是需要社交的動物。飼主經常陪伴它們，與它們玩耍，有助於讓它們保持活躍和愉快。缺乏情感關照的狗狗，可能產生焦慮和壓力，甚至出現反常的排泄和暴躁的行為，甚至破壞飼主的居室。
                  給狗狗提供多種類的<u>玩具</u>、<u>解謎小遊戲</u>和<u>零食</u>，都有益於它們的情感發展。如果家裏只養了一隻狗，那麼飼主最好定期帶它去狗公園，或其它允許狗狗們一起玩耍的場合。</p>
              <li><b>定期梳剪毛髮</b></li>
                <p>狗狗理髮店很貴！但這是飼主必須支付的開銷。如果你的愛犬是長毛品種，那麼你就要經常給它梳毛，並且定期帶它去理髮店剪毛。時常梳剪，可以防止狗因為毛髮糾纏、打結而難受，同時預防皮膚和耳朵感染。護理得當的毛髮，會顯得柔順而漂亮。</p>
                <p>梳剪毛髮的頻率取決於狗的品種。短毛品種的犬類當然不需要經常剪毛。但是，飼主每次幫它們洗澡過後，最好也梳理一下毛髮，這樣有助於維持它們皮毛的亮麗。</p>
              <li><b>預防跳蚤、蜱蟲和心絲蟲</b></li>
                <p>很多飼主注重在夏季幫狗狗防蟲，而在較冷的季節減少防蟲藥品的使用。但這是不合適的，因為跳蚤和蜱蟲活躍於一年四季，而傳播犬心絲蟲（Heartworm）的蚊子也是經常可見的。所以，獸醫一般建議飼主全年定期給狗狗使用防蟲藥品。</p>
              <li><b>定期看獸醫</b></li>
                <p>就像人類要定期體檢一樣，狗也應該定期看獸醫。一般成年狗每年至少體檢一次，老年狗至少要每6個月體檢一次。如果你的狗狗患有慢性疾病，那麼體檢的次數就要增加。</p>
                <p>很多飼主在給狗狗打完疫苗之後，就覺得它們很健康了，不需要經常看獸醫了。但這很容易讓疾病將你打得措手不及。所以，還是應該定期帶愛犬去體檢，儘早發現潛在的健康問題。另外，飼主也可以為狗狗購買健保，以減少健康護理開銷。</p>
              <li><b>保持健康飲食</b></li>
                <p>讓狗狗享有營養均衡的飲食，對它們的健康很重要。獸醫通常建議飼主，根據愛犬的年齡、體型和運動多少，給它們餵食不同配料的高品質狗糧。帶狗去體檢的時候，不妨也向獸醫諮詢具體的膳食計畫。</p>
                <p>一般獸醫都不會建議飼主給愛犬餵食人類食物，因為這些食物通常含有較多的脂肪，以及化學調製的調味品，這會增加它們罹患胰臟炎、膽囊炎等疾病的風險。而高品質的狗糧不含這些有害物質。</p>
                <p>如果狗狗經常眼巴巴地望著你的餐桌，讓你不忍心拒絕它們，那麼不妨餵食一些相對健康的、只經過輕度烹飪的食物吧，例如綠豆角、西蘭花、胡蘿蔔、西瓜、藍莓、香蕉，以及烘烤或白煮的瘦雞肉等等。</p>
              <li><b>不要忘記刷牙</b></li>
                <p>根據「最好朋友動物協會」（Best Friends Animal Society）的專家講解，牙齒疾病，是獸醫最常為狗診治的疾病之一。而且大部分的犬類從3歲左右就開始罹患牙齒疾病了。</p>
                <p>對於飼主來說，幫愛犬降低牙病風險的最簡單辦法，就是每天用狗牙刷和狗牙膏幫它刷牙。這種專用牙膏的主要成分是酶類物質，不需要漱口，也不會傷害狗的身體。刷牙的習慣最好從狗的幼年時期開始培養。</p>
              <li><b>給狗狗做絕育</b></li>
                <p>飼主如果沒打算讓愛犬生寶寶，那麼最好儘早給它做絕育，這將大大改善它的健康前景。沒做過絕育的狗，罹患一些嚴重疾病的風險更大：母狗容易患上子宮蓄膿症，公狗則容易長出睪丸腫瘤和攝護腺癌。這些疾病非常嚴重，甚至讓飼主不得不帶狗去做手術。</p>
              <li><b>防止接觸有毒和危險物品</b></li>
                <p>為了保障狗的健康，飼主除了充分照護它的身心之外，還要確保它日常活動的環境是安全的。飼主最好了解一些常見有毒植物的知識，以避免愛犬接觸這些植物。我們還要將一些危險物品，比如容易被吞嚥的小件塑料，放在狗接觸不到的地方，因為狗是好奇的動物，總喜歡這聞一聞，那咬一咬。</p>
                <p>另外，在戶外遛狗的時候，飼主也要提高警覺，在寵物接觸可疑物品之前及時將它拉開。一個極端的反面例子是，11月初，美國波士頓的一隻比格犬在戶外散步時，舔食了被人遺棄在地上的白色毒品粉末，然後就昏倒了。後來，獸醫不得不用納洛酮（Narcan）來挽救它的生命。</p>
            </ol>
          </div>

          <br>
          <li><b>貓：</b></li>
            <div style="padding-left:15px;">
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
        <ul>
          <li><b>狗、貓：</b></li>
            <p>寵物行為訓練課程是近年來的新趨勢，訓練的目的並非讓毛孩學會各式技能，也不是藉此樹立飼主的威嚴；主要是希望透過訓練，建立起飼主與毛孩之間的溝通管道，矯正毛孩吠叫、暴衝、啃咬或隨地大小便等行為，解決飼主在生活中遇到的困擾，並推廣正確的毛孩照護知識。</p>
            <p>訓練並不是要讓貓狗服從，而是讓狗狗透過你的引導，一起學會與人共處的方式；並且需要持續不斷反覆的練習。任何時候都是訓練的好時機：吃飯、散步、遊戲、甚至是幫牠洗澡、帶牠去醫院等。將行為教育無時無刻落實在生活中，狗狗會學得更快更好，也能與飼主培養感情與信任。</p>
            <p><b>那什麼情況下適合找寵物行為訓練師？</b><br>
            貓狗懂得辨別環境資訊，因此人類平常認為犬貓失控的行為，通常是牠們在反映生活中的需求與壓力來源。此外，犬貓善於觀察人類的肢體語言，若飼主用錯誤的方式與之相處，也可能間接養成犬貓的「不良習慣」。當飼主不確定生活中哪個環節出了狀況，或不清楚該如何正確地與毛孩相處時，建議可以尋求寵物行為訓練師的協助。
              寵物行為訓練師能在授課過程中察覺寵物問題，並協助改變家中環境配置、移除或降低壓力源等。而在訓練過程中，飼主必須和毛孩一同學習，因為影響毛孩行為的主要因素，除了環境之外，還有飼主本身與寵物互動的態度和方式。藉由正確的調整行為模式，並提供毛孩紓壓的活動，有助於達成平衡的人寵生活。
            </p>
        </ul>
      </div>

      <!-- 飲食建議 -->
      <div class="pet-knowledge" id="eat" style="margin-top:30px;">
        <h5><b>飲食建議：</b></h5>
        <p style="margin-left:15px;">現在社會環境惡劣以及食安問題頻頻發生，建立正確的飲食觀念不僅在人的健康上很重要，對於家中心愛的毛小孩也是一個重要的課題，多用點心，花一點點時間可以減少許多不必要的花費及擔心。只要能選擇正確的食物，毛小孩就能健健康康的過生活。你能多用一份心，毛小孩就會少受一份苦。</p>
        <ul>
          <li><b>狗：</b></li>
            <ol>
                <li><b>雜食性動物</b></li>
                  <p>狗狗為雜食性的動物，飲食習慣比較類似於人類，但是在演化上，狗是從狼演化過來的，所以主要的食物還是以肉類為主，但因為經過數萬年的馴化和飼養，狗已經可以接受碳水化合物的飲食習慣，所以才會說狗狗是可以成為雜食性的動物。</p>
                  <p>因此在提供熱量方面，狗狗以<b>蛋白質、脂肪</b>為主、<b>碳水化合物</b>為輔，約為7:3比。基本上<b>植物性蛋白質</b>或是<b>動物性蛋白質</b>在狗的營養上比較沒有太多的差別。牛磺酸與左旋肉鹼在大型犬的需求會比較大，可能特殊犬種如杜賓犬、鬥牛犬、法國鬥牛犬等建議更需額外補充。
                    一般而言動物性蛋白質在狗可以消化90-95%，而植物性蛋白質可以60-80%，所以在食物的選擇上需要特別注意，假如給予過多無法消化的蛋白質則會造成下痢或是腸胃不適等症狀。</p>
                  <p><b>脂肪</b>的部分，和貓咪類似，除了是熱量的來源以外也是需要其中重要的必需脂肪酸，倘若攝取不足會造成皮膚發炎、乾癢甚至會有毛髮乾燥，另外也會造成脂溶性維生素無法吸收，產生其他的疾病如視網膜的病變或是神經遲鈍出現神經質等症狀。而攝取過多也是造成肥胖得主要原因，而造成脂肪肝或是糖尿病及腎臟病，要特別小心。</p>
                  <p><b>碳水化合物</b>的部分，這是與貓最大的不同，因為貓咪需求量非常少，而狗狗卻可以消化大多的碳水化合物，如糖、澱粉、纖維素甚至蔗糖也可以消化吸收，但是乳糖的部分，比較沒辦法，容易造成下痢，如人一樣出現乳糖不耐症，但是畢竟狗是從狼演化來的，當過多的碳水化合物則容易造成脹氣、腸胃不適，所以碳水化合物的量應該適量不要過多。</p>
                  <p>建議以<b>乾糧</b>為主，<b>濕食</b>為輔，食物的成分蛋白質和脂肪與低碳水化合物比例為7:3~6:4。因為狗狗對於飲水量的需求比較大，所以應以乾糧為主，這樣可以減少牙結石的產生，給予大量濕食容易出現牙結石造成牙周病的問題。</p>
                <li><b>維生素＆礦物質</b></li>
                  <p><b>維生素</b>的部分，當狗狗是給予飼料的部分，則不用擔心，飼料的維生素含量是足夠的，沒有問題。因此正常的飲食就足以提供足夠的維生素需求，當生病時和貓一樣，應該給予相對高劑量的維生素B群。其他的脂溶性維生素A、D、E、K補充需要諮詢過動物醫師之後再給予。</p>
                  <p><b>礦物質</b>的部分，在成長的犬隻，補充鈣質是要特別注意的，如果過量補充鈣片、骨粉，可能會導致骨頭提早成熟，造成長短腳和髖關節問題，因為太早給予過多的鈣質容易造成，生長板提早癒合，如果要補充的話，建議以1周1次為限。</p>
                  <p>25公斤以上大狗，飼料的<b>鈣磷比</b>最好是1：1~1.5：1。另外，在狗狗懷孕期補充鈣粉的原則是，懷孕期前面30天補充，後面的30天正常飲食，等到生產完畢之後，再添加鈣粉，這樣才不會出現泌乳熱。</p>
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
            </ol>
          <br><br>
          <li><b>貓：</b></li>
            <ol>
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
        </ul>
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <header style="margin-left: 10px;">種類</header>
                                    <div class="icon"><span class="fa fa-chevron-down" style="margin-top: 33px;"></span></div>
                                    <select name="type" id="type" class="form-control" style="border: 1px; border-color:#dbd2c9;">
                                        <option disabled selected hidden>&nbsp&nbsp--請選擇--</option>
                                        <option value="狗">狗</option>
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
      <div>
          <h4>• 狗</h4>
      </div>
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dog1" aria-expanded="false" >
              如果狗狗沒有足夠的活動空間會怎麼樣？
            </button>
          </h2>
          <div id="dog1" class="accordion-collapse collapse show">
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dog2" aria-expanded="false">
              狗狗需要注射的疫苗有哪些？
            </button>
          </h2>
          <div id="dog2" class="accordion-collapse collapse">
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dog3" aria-expanded="false">
              狗狗需要多少運動量呢？
            </button>
          </h2>
          <div id="dog3" class="accordion-collapse collapse">
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
          <h4>• 貓</h4>
      </div>
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cat1" aria-expanded="false" >
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