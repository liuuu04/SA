<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/stylesignup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php
require('connection.php');
if (isset($_POST['identify'], $_POST['motivation'], $_POST['job'], $_POST['economic'], $_POST['family_kid'], $_POST['family_cat'], $_POST['family_dog'], $_POST['family_other'], $_POST['family_roomate'], $_POST['experience'])) {
    $economic = $_POST['economic'];
    $identify = $_POST['identify'];
    $job = $_POST['job'];
    $family_kid = $_POST['family_kid'];
    $family_cat = $_POST['family_cat'];
    $family_dog = $_POST['family_dog'];
    $family_other = $_POST['family_other'];
    $family_roomate = $_POST['family_roomate'];
    $experience = $_POST['experience'];
    $motivation = $_POST['motivation'];
    
    



   
    $query = "INSERT INTO `profile` (`identify`, `motivation`, `economic`, `job`, `family_kid`, `family_cat`, `family_dog`, `family_other`, `family_roommate`, `experience`) 
                             VALUES ('$identify', '$motivation', '$economic', '$job', '$family_kid', '$family_cat', '$family_dog', '$family_other', '$family_roomate', '$experience')";
    $result1 = mysqli_query($conn, $query);

    $query_update_account = "UPDATE `account` SET `identify_level` = 'adopter' WHERE `identify` = '$identify'";
    $result_update_account = mysqli_query($conn, $query_update_account);


    if ($result1) {
        echo "<div class='form'>
        <h3>填寫成功</h3>
        <br/>點擊前往 <a href='login.php'>登入</a></div>";
    } else {
        echo "Error: " . mysqli_error($conn); // Display error message if query fails
    }

    $conn->close();
} else {


?>
<label class="btn3" for="modal-flag">為什麼我需要填寫這份表單?</label>
    
    <input id="modal-flag" type="checkbox" />
    <div class="my-modal-container">
        <div class="my-modal">
           <p> 親愛的使用者您好，我們致力於確保送養和領養之間資訊的透明度，以便送養人能夠對領養者進行初步評估。<br><br>
           <span>如果您有領養需求，請填寫此進階表單。</span><br><br>填寫完進階表單後，您才能使用私訊功能與送養者聯絡。如果您只是有送養需求，
            可以跳過此表單直接返回首頁使用功能。<br><br><i class="fas fa-exclamation-circle text-danger mr-2"></i> 但請注意，如果您將來有領養需求，請返回首頁並填寫進階表單。
            <br><br>祝您在這裡找到心儀的寵物。
            <br>開發團隊</p>
            <label class="btn" for="modal-flag">關閉</label>
            <a href="index.php" style="color: #000;text-decoration: none;"><label class="btn2">無領養需求，請帶我至首頁</label></a>
        </div>
    </div>
<div id="form">
<h1 id="heading">使用者個人檔案</h1>
<form name="form" action="" method="post" accept-charset="UTF-8">

<label>帳號名稱:</label><br>
<input type="text" name="identify" placeholder="輸入帳號名稱"  required/><br><br>

<label for="message">領養動機:</label><br>
<textarea type= "message" id="message" name="motivation" rows="4" cols="50"placeholder="請在這裡輸入您的領養動機" required>
</textarea><br><br>

<label>職業:</label><br>
<input type="text" name="job" placeholder="職業狀況 例如: 學生、上班族" required/><br><br>


<label>財務狀況: 月收入狀況約</label><br>
<select  id="family_kid" name="economic">
    <option value="0"></option>
    <option value="1">0~一萬元區間</option>
    <option value="2">一萬~三萬區間</option>
    <option value="3">三萬~五萬(含)</option>
    <option value="4">五萬元以上</option>
    </select> <br> <br>




<label for="family_kid">家庭成員-(小孩):</label><br>
  <select  id="family_kid" name="family_kid">
    <option value="0">0 位</option>
    <option value="1">1 位</option>
    <option value="2">2 位</option>
    <option value="3">3 位</option>
    <option value="4">4 位</option>
    <option value="5">5位或更多</option>
    </select> <br> <br>

  <label for="family_roomate">家庭成員-(同住者): </label><br>
  <select id="family_roomate" name="family_roomate">
    <option value="0">0 位</option>
    <option value="1">1 位</option>
    <option value="2">2 位</option>
    <option value="3">3 位</option>
    <option value="4">4 位</option>
    <option value="5">5次或更多</option>
  </select> <br><br>

  <label for="family_dog">寵物狗的數量： </label><br>
  <select id="family_dog" name="family_dog">
  <option value="0">0 隻</option>
    <option value="1">1 隻</option>
    <option value="2">2 隻</option>
    <option value="3">3 隻</option>
    <option value="4">4 隻</option>
    <option value="5">5隻或更多</option>
  </select> <br><br>

  <label for="family_cat">寵物貓的數量：</label><br>
  <select id="family_cat" name="family_cat">
  <option value="0">0 隻</option>
    <option value="1">1 隻</option>
    <option value="2">2 隻</option>
    <option value="3">3 隻</option>
    <option value="4">4 隻</option>
    <option value="5">5隻或更多</option>
  </select> <br><br>

  <label for="family_other">其他寵物的數量： </label><br>
  <select id="family_other" name="family_other">
    <option value="0">0 隻</option>
    <option value="1">1 隻</option>
    <option value="2">2 隻</option>
    <option value="3">3 隻</option>
    <option value="4">4 隻</option>
    <option value="5">5隻或更多</option>
  </select> <br><br>

  <label for="experience">領養經驗: </label><br>
  <select id="experience" name="experience">
    <option value="0">0 次</option>
    <option value="1">1次 </option>
    <option value="2">2次</option>
    <option value="3">3次或更多</option>
  </select> <br><br>

  <input type="submit" id="btn" name="submit" value="提交" />

</form>

<style>

body {
    background: url("images/bgpet.png") no-repeat -30px -60px fixed;
      background-size: cover;
      font-family: "cursive", sans-serif;
     
    }   
  
  #form {
    background-color: #f5f5dc;
    width: 50%; /* Adjusted width */
    border-radius: 30px;
    margin: 80px auto; 
    padding: 40px; 
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    margin-top: 300px;
    
  }
  
  #btn {
    color: #000;
    background-color: #DBD2C9;
    padding: 10px 18px;
    font-size: 14px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-weight: 800;
  }
  
  #btn:hover {
    color: #fff;
    background-color: #b8a692; /* Darken the background on hover */
  }
  
  .pet-photo {
    display: flex;
    justify-content: space-around; /* Arrange pet photos evenly */
    margin-bottom: 30px; /* Add some space between the pet photos */
  }
  
  .pet-photo img {
    border-radius: 50%; /* Make the pet photos circular */
    border: 4px solid #fff; /* Add a white border around the pet photos */
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
    transition: transform 0.3s ease; /* Smooth transition */
  }
  
  .pet-photo img:hover {
    transform: scale(1.1); /* Zoom in on hover */
  }
  .h1{
    font-size: 25px;
    font-family: "cursive", sans-serif;
  }

  #form input[type="text"],
  #form textarea{
    width: 70%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 30px;
    border: none;
    font-size: 16px;
  }

  #form input[type="text"],
  #form textarea:focus{
    outline: none;
    border: none;
    font-size: 16px;
  }
  #form select{
    width: 35%;
    padding: 5px;
    margin-bottom: 8px;
    border-radius: 30px;
    border: none;
    font-size: 16px;
  }

  #form select:focus{
    outline:none;
    border: none;
  }

  #form input[type="date"],
  #form input[type="email"] 
  #form input[type="tel"]{
    width: 70%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 30px;
    border: none;
    font-size: 16px;
  }

  #form input[type="date"],
  #form input[type="email"] 
  #form input[type="tel"]:focus{
    outline: none;
    border: none;
  }


#form input[type="password"] {
  width: 70%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 30px;
  border: none;
  font-size: 16px;
}

#form input[type="password"]:focus {
 outline: none;
  border: none;
}


.my-modal-container {
            opacity: 0;
            pointer-events: none;
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.3);
            transition: opacity 0.2s linear;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .my-modal {
            background-color: #fff;
            display: inline-block;
            border-radius: 0px;
            padding: 30px;
            max-width: 360px;
        }
        .my-modal p{
          font-size: 15px;
          margin-bottom: 50px;
          margin-top: -5px;
        }
        
        .my-modal span{
          font-weight: 600;
        }

        .my-modal i{
          font-size: 15px;
        }
        
        .btn {
            border-radius: 5px;
            padding: 8px 12px;
            background-color: silver;
            font-weight: 400;
        }

        .btn2 {
            border-radius: 5px;
            padding: 8px 12px;
            background-color: #dbd2c9;
            font-weight: 600;
        }

        .btn3 {
            border-radius: 0px;
            padding: 8px 12px;
            background-color: #dbd2c9;
            font-weight: 600;
            
        }
        #modal-flag {
            display: none;
        }
        #modal-flag:checked + .my-modal-container {
            opacity: 1;
            pointer-events: unset;
        }

</style>

<script>
        
        window.onload = function() {
            document.getElementById("modal-flag").checked = true;
        };
    </script>

<?php } ?>

</body>
</html>
