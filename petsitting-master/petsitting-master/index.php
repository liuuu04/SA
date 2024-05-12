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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="chat3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
  
    .unread-count {
    color: white;
    font-size: 12px;
    margin-left: auto;
    margin-right: 10px; 
    display: inline-flex; 
    align-items: center; 
    justify-content: center;
    width: 15px; 
    height: 15px; 
    border-radius: 50%; 
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
              <li class="nav-item active"><a href="index.html" class="nav-link">首頁</a></li>
              <li class="nav-item"><a href="vet.html" class="nav-link">寵物知識專區</a></li>
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
                <a href="pet_post.php">刊登寵物</a>
                <a href="#">查看已刊登的寵物</a>
                <a href="logout.php">登出</a>
            </div>
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

    
    <div class="search1">
    <form id="searchForm">
        <input type="text" id="searchinput" placeholder="關鍵字搜尋..." name="keyword">
        <button type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
    </form>
    </div>


    <div class="contain">
    <div id="searchResults"></div>
    </div>
    <?php
   

    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $current_identify = $_SESSION['identify'];

    $sql = "SELECT DISTINCT Account.identify, Account.name AS receiver_name, 
                COALESCE(SUM(CASE WHEN message.is_read = 0 AND message.receiver_id = '$current_identify' THEN 1 ELSE 0 END), 0) AS unread_count,
                Account.identify_level
        FROM Account
        LEFT JOIN message ON Account.identify = message.sender_id
        WHERE Account.identify != '$current_identify' AND (message.receiver_id = '$current_identify' OR message.sender_id = '$current_identify')
        GROUP BY Account.identify, Account.name, Account.identify_level
        UNION
        SELECT DISTINCT Account.identify, Account.name AS receiver_name, 
                COALESCE(SUM(CASE WHEN message.is_read = 0 AND message.receiver_id = '$current_identify' THEN 1 ELSE 0 END), 0) AS unread_count,
                Account.identify_level
        FROM Account
        LEFT JOIN message ON Account.identify = message.receiver_id
        WHERE Account.identify != '$current_identify' AND (message.sender_id = '$current_identify' OR message.receiver_id = '$current_identify')
        GROUP BY Account.identify, Account.name, Account.identify_level";



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
          if ($contact['unread_count'] > 0) {
            echo '<span class="unread-count" data-identify="' . $contact['identify'] . '">' . $contact['unread_count'] . '</span>';
          }
          echo '</div>';
      }
      ?>

    </div>

    <div class="contain">
    <?php
  
      $link=mysqli_connect('localhost','root','12345678','sa');
      mysqli_set_charset($link,"utf8");
      $sql = "SELECT pet_id, pet_name, pet_type, pet_publish, pet_variety, pet_gender, pet_age, pet_address, pet_explain, pet_photo From pet";
      $result=mysqli_query($link,$sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
             $pet_photo=$row['pet_photo'];
            ?>
    
		<div class="petframe">
		  <div class="petphoto">
        <?php echo "<img src='{$pet_photo}' alt='{$introduce}'><br>" ?>
	  
		  </div>
		  <div class="petintro">
			 <span><?php echo $row['pet_name']; ?></span><p style="display: inline;"><?php echo $row['pet_publish']; ?></p>
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
}
mysqli_close($link);
?>
</div>
    
          
		</footer>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
    
        $('#searchForm').submit(function(event) {
         
            event.preventDefault();

            var keyword = $('#searchinput').val().trim().toLowerCase();

            $('.petframe').each(function() {
    
                var petContent = $(this).text().toLowerCase();

                if (petContent.includes(keyword)) {
                   
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
    </script>
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
      function toggleChat() {
        var chatPopup = document.getElementById("chatPopup");
        var chatIcon = document.querySelector(".chat-icon");
        if (chatPopup.style.display === "block") {
          chatPopup.style.display = "none";
          chatIcon.style.display = "flex"; 
          
        } else {
          chatPopup.style.display = "block";
          chatIcon.style.display = "none"; 
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

        
        function markMessageAsRead(messageId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
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
        var chatIconReload = document.querySelector('.chat-icon');
        chatIconReload.innerHTML = "💬"; 
        
        
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
                            unreadCounts[i].textContent = unreadCount;
                              if (unreadCount > 0) {
                                  unreadCounts[i].style.opacity = 1;
                              } else {
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
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        
        var keyword = document.getElementById('searchinput').value.trim();
        
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    document.getElementById('searchResults').innerHTML = xhr.responseText;
                } else {
                    console.error("Failed to load search results");
                }
            }
        };
        xhr.open('GET', 'search.php?keyword=' + encodeURIComponent(keyword), true);
        xhr.send();
    });
  </script>
  

  </body>
</html>
