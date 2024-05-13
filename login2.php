<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
<?php
 $identify=$_POST['identify'];
 $password=$_POST['password'];
 $link = mysqli_connect('localhost','root','12345678','sa');
 $sql="select distinct * from account where identify='$identify' and password='$password'";
 $result= mysqli_query($link,$sql);
 if($row=mysqli_fetch_assoc($result))
     {
       $_SESSION['identify'] = $row['identify'];
       $_SESSION['email'] = $row['email'];
       $_SESSION['name'] = $row['name'];
       $_SESSION['identify_level'] = $row['identify_level'];
       $_SESSION['birth'] = $row['birth'];
       $_SESSION['gender'] = $row['gender'];
       $_SESSION['identify_photo'] = $row['identify_photo'];
       if($_SESSION['identify_level']=='member'||$_SESSION['identify_level']=='adopter'){
       header("Location:index.php");}
       else{
        header("Location:manager.php");
       }

     } 
 else{
    header("refresh:1;url=http://localhost/login.php");
    echo "帳號或密碼錯誤";
 }
    
     ?>
</body>
</html>
