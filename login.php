<?php
  session_start();
  if (isset($_SESSION['IDENTIFY'])) {
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
            $_SESSION['identify1'] = $row['identify'];
            $_SESSION['email1'] = $row['email'];
            $_SESSION['name1'] = $row['name'];
            $_SESSION['identify_level1'] = $row['identify_level'];
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
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <style>
    body {
      background: url("bg_1.jpg") no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    #form {
        background-color: rgba(255, 253, 208,0.9);
      width: 300px;
      border-radius: 10px;
      margin: 100px auto;
      padding: 20px;
      box-shadow: 0 30px 40px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .h1{
    font-size: 25px;
    font-family: "cursive", sans-serif;
  }
    
    #form input[type="text"],
    #form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 6px;
      border: 1.5px solid ;
      box-sizing: border-box; 
    }
    
    #btn {
      color: #fff;
      background-color: rgb(17, 115, 41);
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    #btn:hover {
      background-color: rgb(19, 133, 47);
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
  </style>
</head>
<body>

 


        <form action="" method="POST">
          <div id="form">
            <h1>登入</h1>
            <form name="form" action="" onsubmit="return isvalid()" method="POST">
                <label>帳戶: </label>
                <input type="text" id="identify" name="identify"></br></br>
                <label>密碼: </label>
                <input type="password" id="password" name="password"></br></br>
                <input type="submit" id="btn" value="登入" name = "submit"/>
            </form>
            <p class="mt-3">沒有帳號? <a href="signup.php">請註冊</a></p>
       

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
