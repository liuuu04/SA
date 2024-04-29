  <?php
    session_start();
    if (isset($_SESSION['identify'])) {
        header("Location:index.php");
        exit();
    }
    // Include database connectivity
      
    include_once('connection.php');
    
    if (isset($_POST['submit'])) {
        $errorMsg = "";
        $identify = $conn->real_escape_string($_POST['identify']);
        $password = $conn->real_escape_string(md5($_POST['password']));
        
    if (!empty($identify) || !empty($password)) {
          $query  = "SELECT * FROM account WHERE identify = '$identify'";
          $result = $conn->query($query);
          if($result->num_rows > 0){
              $row = $result->fetch_assoc();
              $_SESSION['identify'] = $row['identify'];
              $_SESSION['email'] = $row['email'];
              $_SESSION['name'] = $row['name'];
              $_SESSION['identify_level'] = $row['identify_level'];
              $_SESSION['identify_photo'] = $row['identify_photo'];
              header("Location:index.php");
              exit();                              
          }else{
            $errorMsg = "No user found on this username";
          } 
      }else{
        $errorMsg = "Username and Password is required";
      }
    }
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
    body {
      background: url("images/bgpet.png") no-repeat center center fixed;
        background-size: cover;
        font-family: Arial, sans-serif;
      
      }
      
      #form {
        background-color: #F5F5DC;
        height: auto;
        width: 400px;
        border-radius: 10px;
        margin: 100px auto;
        padding: 20px;
        margin-top: 250px;
        text-align: center;
        box-shadow: 0 30px 40px rgba(0, 0, 0, 0.1);
      }
      .h1{
      font-size: 25px;
      font-family: "cursive", sans-serif;
    }
      
      #form input[type="text"],
      #form input[type="password"] {
        width: 200px  ;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 30px;
        border: none ;
        
      }

      #form input[type="text"],
      #form input[type="password"]:focus {
        outline: none;
        border: none;
      }
      
      #btn {
        color: #000;
        font-weight: 600;
        background-color: #DBD2C9;
        padding: 10px 40px 10px 40px;
        font-size: 16px;
        border-radius: 30px;
        border: none;
        transition: background-color 0.3s ease;
      }
      
      #btn:hover {
        background-color: #DBD2C9;
      }
      
      .pet-photo {
        display: flex;
        justify-content: space-around;
        margin-top: 30px;
      }
      
      .pet-photo img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 4px solid #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
      }
      
      .pet-photo img:hover {
        transform: scale(1.1);
      }

      #change{
        font-size: 20px;
        font-weight: 800;
        margin-right: 20px;
      }
    </style>
  </head>
  <body>

  


          <form action="" method="POST">
            <div id="form">
              <h1><i class="fas fa-paw mr-2"></i> 登入</h1>
              <form name="form" action="" onsubmit="return isvalid()" method="POST">
                  <label id="change"><i class="fas fa-user mr-2"></i> 帳號: </label>
                  <input type="text" id="identify" name="identify"></br></br>
                  <label id="change"><i class="fas fa-key mr-2"></i> 密碼: </label>
                  <input type="password" id="password" name="password"></br></br>
                  <input type="submit" id="btn" value="登入" name = "submit"/>
              </form>
              <p class="mt-3">還沒有帳號嗎? <a href="signup.php" style="color:#5579c6;font-weight: 600;">請註冊</a></p>
        

          </form> </div>
          <script>
              function isvalid(){
                  var identify = document.form.identify.value;
                  var password = document.form.password.value;
                  if(identify.length=="" && password.length==""){
                      alert(" Check your password / username (檢查您的密碼/使用者名稱) ");
                      return false;
                  }
                  else if(account_id.length==""){
                      alert(" Username field is empty!(使用者名稱欄位是空的)");
                      return false;
                  }
                  else if(password.length==""){
                      alert(" Password field is empty(密碼欄位是空的)");
                      return false;
                  }
                  
              }
          </script>
        
  </body>

  </html>
  </html>
