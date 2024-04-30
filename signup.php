<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<div id="form">
<h1 id="heading"><i class="fas fa-paw mr-2"></i> 註冊</h1>
<form action="signupfix.php" method="POST" enctype="multipart/form-data" name="form">
<label>帳號名稱:</label><br>
<input type="text" name="identify" placeholder="請輸入帳戶名稱" required/><br><br>
<label>輸入姓名:</label><br>
<input type="text" name="name" placeholder="請輸入姓名" required/><br><br>
<label>輸入出生日期:</label><br>
<input type="date" id="birth" name="birth" required><br><br>
<label>輸入電子郵件:</label><br>
<input type="Email" name="email" placeholder="請輸入電子郵件" required/><br><br>
<label>輸入電話號碼:</label><br>
<input type="text" name="identify_phone" placeholder="請輸入電話號碼" required/><br><br>
<label>輸入密碼: </label><br>
<input type="password" name="password" placeholder="請輸入密碼" required /><br><br>

<label>輸入性別:</label><br><br>
<input type="radio" id="male" name="gender" value="male" required>
<label for="male">男</label><br>
<input type="radio" id="female" name="gender" value="female" required>
<label for="female">女 </label><br><br>
<label>請上傳身分證正面照片: </label>
<input type="file" name="identify_photo" id="identify_photo">
<img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 400px; max-height: 400px;"><br><br>
 
<div class="container">
    
    <h2>說明與條款</h2>
    <div class="scroll-box">
       
        <p>1. 透過註冊我們的平台，您確認您至少年滿10歲並且具有法律能力進入本協議。</p>
        <p>2. 帳戶資訊：您同意在註冊過程中提供準確和最新的資訊，並在資訊變更時及時更新。</p>
        <p>3. 寵物領養指南：會員同意遵守平台制定的寵物領養指南和政策，包括但不限於，為領養的寵物提供適當的環境、確保適當的照顧和關注，並遵守所有法律要求。</p>
        <p>4. 行為準則：會員同意以尊重和負責任的方式對待平台上的其他會員、管理員和領養的寵物。任何形式的騷擾、歧視或不適當行為將不被容忍。</p>
        <p>5. 會員資格終止：如果會員違反本協議中的任何條款和條件，平台保留在不事先通知的情況下終止或暫停會員資格的權利。</p>
        
        </div>
    <br>
    <p><input type="checkbox" id="identify_level" name="identify_level" value="member" required>我同意上述條款</p>
    <br><br>

<input type="submit" id="btn" name="submit" value="註冊" />
<p class="mt-3">已註冊帳號? <a href="login.php" style="color:#5579c6;font-weight:800;">請登入</a></p>
</form>
</div>


<script>
        document.getElementById('identify_photo').addEventListener('change', function(event) {
            var file = event.target.files[0];
            var imagePreview = document.getElementById('imagePreview');

            var reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block'; // Show the image preview
            }
            reader.readAsDataURL(file);
        });
    </script>


</div>


<script>
        // Function to validate password confirmation
        function validatePassword() {
            var password = document.getElementById("password").value;
            var cpassword = document.getElementById("cpassword").value;

            if (password != cpassword) {
                alert("Passwords do not match!");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }

        document.forms["form"].addEventListener("submit", function(event) {
            if (!validatePassword()) {
                event.preventDefault(); 
            }
        });
    </script>
</body>


<style>
    
    .container {
        max-width: 500px;
        margin: left;
    }
    .scroll-box {
    height: 200px; 
    overflow-y: scroll;
    border: 1.5px solid #999;
    padding: 10px;
    transition: border-color 0.3s ease; 
    border-radius: 6px;
    background-color: white;
    }

.scroll-box:hover {
    border-color: #000; 
    }

    #form input[type="date"] {
  width: 50%;
  padding: 5px;
  margin-bottom: 20px;
  border-radius: 30px;
  border: 1.5px solid;
  font-size: 16px;
}

#form input[type="Email"] {
  width: 70%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 30px;
  border: none;
  font-size: 16px;
}

#form input[type="Email"]:focus {
  outline: none;
  border: none;
}

#form label{
    font-size: 16px;
    font-weight: 800;
    margin-bottom: 15px;
}





body {
    background: url("images/bgpet.png") no-repeat -30px -60px fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
     
    }   
  
  #form {
    background-color: #f5f5dc;
    width: 50%; /* Adjusted width */
    border-radius: 30px;
    margin: 80px auto; 
    padding: 40px; 
    
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

</style>

</html>
