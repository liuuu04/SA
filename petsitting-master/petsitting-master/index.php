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
    <link rel="stylesheet" href="newcss.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="chat1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    
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
       <?php
      session_start();

      if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
    
    $buttonText = $_SESSION['name'];}
    
    else {
    
    $buttonText = "登入/註冊";}
    ?>

<button class="intromy"><a href="#"><img src="images/owner.png"><span><?php echo $buttonText; ?></span></a></button>
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
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img"><img src="images/loudspeaker.png"></div>
                    	<div class="pl-3">
		                    <p class="name">2024-04-28</p>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <div class="search1">
		<form action="search.php" method="GET">
			<input type="text" id="searchinput" placeholder="關鍵字搜尋...">
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

    $sql = "SELECT DISTINCT Account.identify, Account.name AS receiver_name
            FROM message
            JOIN Account ON message.receiver_id = Account.identify
            WHERE message.sender_id = '$current_identify'
            UNION
            SELECT DISTINCT Account.identify, Account.name AS receiver_name
            FROM message
            JOIN Account ON message.sender_id = Account.identify
            WHERE message.receiver_id = '$current_identify'";

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
			 <a href="#" onclick="openChatRoom('<?php echo $receiver_identify; ?>')">聯絡送養人</a>

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
