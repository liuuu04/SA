<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>看已刊登的寵物</title>
    <link rel="stylesheet" href="new2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
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
        background-color: #000;
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
<nav class="navbar">
        <div class="topp">
        <p><i class="fas fa-paw mr-2"></i> 寵物領養平台</p>
    
         <div id="aaa">
         <a href="index.php">首頁</a>
         <a href="mg_active.html">寵物知識</a>
         <a href="#">討論區</a>
         <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
         <div class="dropdown">
        <?php  session_start(); ?>
          <button class="intromy"><img src="<?php echo $_SESSION['identify_photo']; ?>" style="border-radius: 50%;"><span><?php echo $_SESSION['name'];?></span></button>
            <div class="dropdown-content" id="intromyDropdown">
                <a href="view.php">查看個人檔案</a>
                <a href="pet_post.php">刊登寵物</a>
                <a href="viewpet.php">查看已刊登的寵物</a>
                <a href="viewheart.php">查看誰申請了愛心切結書</a>
                <a href="heart.pdf" target="_blank">下載愛心認養切結書</a>
            </div>
        </div>
         </div>
        
        </div>
       </nav>
<?php
   $pet_id=$_GET['pet_id'];
   $link=mysqli_connect('localhost','root','han20000914','sa');

   $sql="select * from pet where pet_id='$pet_id'";
   $result=mysqli_query($link,$sql);
   if($row=mysqli_fetch_assoc($result))
   {
    $pet_name=$row['pet_name'];
    $pet_age=$row['pet_age'];
    $pet_character=$row['pet_character'];
    $pet_medical=$row['pet_medical'];
    $pet_type=$row['pet_type'];
    $pet_variety=$row['pet_variety'];
    $pet_color=$row['pet_color'];
    $pet_gender=$row['pet_gender'];
    $pet_size=$row['pet_size'];
    $pet_address=$row['pet_address'];
    $pet_ligation=$row['pet_ligation'];
    $pet_publish=$row['pet_publish'];
    $pet_withkidpet=$row['pet_withkidpet'];
    $pet_heart=$row['pet_heart'];
    $pet_photo=$row['pet_photo'];
    $pet_explain=$row['pet_explain'];
    $identify=$row['identify'];

    $male_checked = ($pet_gender == '公') ? 'checked' : '';
    $female_checked = ($pet_gender == '母') ? 'checked' : '';

    $dog_checked = ($pet_type == '狗') ? 'checked' : '';
    $cat_checked = ($pet_type == '貓') ? 'checked' : '';
    $other_checked = ($pet_type == '其他') ? 'checked' : '';


    $big_checked = ($pet_size == '大') ? 'checked' : '';
    $mid_checked = ($pet_size == '中') ? 'checked' : '';
    $small_checked = ($pet_size == '小') ? 'checked' : '';
    
    $yes_checked = ($pet_ligation == '是') ? 'checked' : '';
    $no_checked = ($pet_ligation == '否') ? 'checked' : '';

    $hyes_checked = ($pet_heart == '是') ? 'checked' : '';
    $hno_checked = ($pet_heart == '否') ? 'checked' : '';


    $myes_checked = ($pet_medical == '有') ? 'checked' : '';
    $mno_checked = ($pet_medical == '無') ? 'checked' : '';
    $notsure_checked = ($pet_medical == '不確定') ? 'checked' : '';
   }
   mysqli_close($link);

   

   ?>
   <div class="gridd">

    <div id="left">
    <h1 style="margin-left:80px;">修改寵物資訊</h1>
    <?php echo "<img src='{$pet_photo}' alt=' '><br>" ?>
    <h2 style="margin-left: 80px;">更改寵物照片</h2>
    <form action="petphotofix.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>">
     <input type="file" style="margin-left:80px;font-size: 15px;" name="new_pet_photo" id="new_pet_photo">
     <input type="submit" value="更改" id="photobtn" style="background-color:gray;color:#fff;font-size: 15px;
     font-weight: 550;border:none;padding:5px 10px;"><br><br>
     <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 400px; max-height: 400px;">
     
</form>

    </div>

    <div id="right">
    
       <form action="uploadpet.php" enctype="multipart/form-data" method="POST">
       <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>">
       <div id="bbb">
        <p>寵物姓名:</p><input type="text" value="<?php echo $pet_name?>" name="pet_name" required>
</div>

       <div id="bbb">
        <p>寵物年齡:</p><input type="number" value="<?php echo $pet_age?>" name="pet_age" required>
</div>
<div id="bbb">
        <p>寵物毛色:</p>
        <input type="text" name="pet_color" value="<?php echo $pet_color?>" required>
        </div>


        <div id="bbb">
        <p>寵物性別:</p>
        <input type="radio" value='公' name="pet_gender" <?php echo $male_checked; ?>>公
        <input type="radio" value='母' name="pet_gender" <?php echo $female_checked; ?>>母

        </div>

        <div id="bbb">
        <p>寵物種類:</p>
<input type="radio" value="狗" name="pet_type" id="dog" <?php echo $dog_checked; ?>><label for="dog">狗</label>
<input type="radio" value="貓" name="pet_type" id="cat" <?php echo $cat_checked; ?>><label for="cat">貓</label>
<input type="radio" value="其他" name="pet_type" id="other" <?php echo $other_checked; ?>><label for="other">其他</label>
</div>

<select name="pet_variety" id="pet_variety" required>
    <option selected><?php echo $pet_variety;?></option>
</select>

<input type="text" name="other_breed_text" id="other_breed_text" class="form-control" placeholder="請輸入品種" style="display: none;"> <!-- Hidden text input -->

<script>
    document.querySelectorAll('input[name="pet_type"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            var petType = this.value;
            var breedSelect = document.getElementById('pet_variety');
            breedSelect.innerHTML = ''; 

            if (petType === '狗') {
                var dogBreeds = ['台灣犬','吉娃娃','博美','約克夏','馬爾濟斯','雪納瑞','米格魯','臘腸犬','貴賓犬','鬥牛犬','比熊','柴犬','柯基','秋田犬','拉布拉多','黃金獵犬', '柯基', '哈士奇','杜賓','古代牧羊犬'];
                showBreeds(dogBreeds);
            } else if (petType === '貓') {
                var catBreeds = ['米克斯貓', '曼赤肯', '蘇格蘭摺耳貓','暹羅貓','英國短毛貓', '美國短毛貓','布偶貓'];
                showBreeds(catBreeds);
            } else {
                document.getElementById('other_breed_text').style.display = 'block'; 
            }
        });
    });

    function showBreeds(breeds) {
        var breedSelect = document.getElementById('pet_variety');
        breeds.forEach(function(breed) {
            var option = document.createElement('option');
            option.value = breed;
            option.textContent = breed;
            breedSelect.appendChild(option);
        });

        var otherOption = document.createElement('option');
        otherOption.value = '其他';
        otherOption.textContent = '其他';
        breedSelect.appendChild(otherOption);
    }

    document.getElementById('pet_variety').addEventListener('change', function() {
        var breed = this.value;
        if (breed === '其他') {
            document.getElementById('other_breed_text').style.display = 'block'; 
        } else {
            document.getElementById('other_breed_text').style.display = 'none'; 
        }
    });
</script>



       

       

        <div id="bbb">
        <p>寵物體型:</p>
        <input type="radio" value="大" name="pet_size" <?php echo $big_checked;?>>大
        <input type="radio" value="中" name="pet_size" <?php echo $mid_checked; ?>>中
        <input type="radio" value="小" name="pet_size" <?php echo $small_checked; ?>>小
        </div>


        <div id="bbb">
        <p>縣市:</p>
        <select name="pet_address" id="pet_address">
            <option><?php echo $pet_address?></option>
            <option value="台北市">台北市</option>
            <option value="新北市">新北市</option>
            <option value="桃園市">桃園市</option>
            <option value="新竹縣">新竹縣</option>
            <option value="新竹市">新竹市</option>
            <option value="苗栗縣">苗栗縣</option>
            <option value="台中市">台中市</option>
            <option value="彰化縣">彰化縣</option>
            <option value="南投縣">南投縣</option>
            <option value="雲林縣">雲林縣</option>
            <option value="嘉義市">嘉義市</option>
            <option value="嘉義縣">嘉義縣</option>
            <option value="台南市">台南市</option>
            <option value="高雄市">高雄市</option>
            <option value="屏東縣">屏東縣</option>
            <option value="花蓮縣">花蓮縣</option>
            <option value="台東縣">台東縣</option>
            <option value="宜蘭縣">宜蘭縣</option>
        </select>
        </div>


        <div id="bbb">
        <p>寵物是否結紮:</p>
        <input type="radio" value="是" name="pet_ligation" <?php echo $yes_checked; ?>>是
        <input type="radio" value="否" name="pet_ligation" <?php echo $no_checked; ?>>否
        </div>

        <div id="bbb">
        <p>愛心切結書要求(是否需要):</p>
        <input type="radio" value="是" name="pet_heart" <?php echo $hyes_checked;?>>是
        <input type="radio" value="否" name="pet_heart" <?php echo $hno_checked;?>>否
        </div>

        <div id="bbb">
        <p>寵物病史:</p>
        <input type="radio" value="無" name="pet_medical" <?php echo $mno_checked;?>>無
        <input type="radio" value="有" name="pet_medical" <?php echo $myes_checked; ?>>有
        <input type="radio" value="不確定" name="pet_medical" <?php echo $notsure_checked; ?>>不確定
        </div>
        

        <?php
$link=mysqli_connect('localhost','root','han20000914','sa');
$sql2="select * from pet_medical where pet_id='$pet_id' ORDER BY medical_id";
$result=mysqli_query($link,$sql2);
?>
 <br>
    <div id="bbbb">
    <p>寵物病史詳情</p>
    <button type="button" id="add_medical_field">新增欄位+</button>

    <div id="medical_details">
   <?php while ($row=mysqli_fetch_assoc($result)) {
        $medical_content=$row['medical_content'];
        echo '<input type="text" name="medical_content[]" value="' . $medical_content . '" readonly>';
        
     }
     mysqli_close($link);?>
    </div>
</div>

        
        
        
       <br>
        <div id="ccc">
       <p>寵物個性說明:</p><br>
        <textarea id="character" name="pet_character" rows="10" cols="60" placeholder="寵物個性"><?php echo $pet_character?></textarea>
        </div>


        <div id="ccc">
        <p>與小孩和其他寵物的相處情形:</p><br>
        <textarea id="kidpet" name="pet_withkidpet" rows="10" cols="60" placeholder="與小孩和其他寵物相處情形"><?php echo $pet_withkidpet?></textarea>
        </div>


        
        <div id="ccc">
        <p>寵物說明欄位:</p><br>
        <textarea id="explain" name="pet_explain" rows="10" cols="60" placeholder="寵物說明欄位"><?php echo $pet_explain?></textarea>
        </div>
        
        <input type="submit" id="buttonna" value="修改寵物資訊">
       </form>
     
    </div>

	</div>

    <script>
    document.getElementById('new_pet_photo').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var imagePreview = document.getElementById('imagePreview');

        var reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block'; 
        }
        reader.readAsDataURL(file);
    });
</script>


<br>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var medicalRadio = document.querySelectorAll('input[name="pet_medical"]');
    var medicalDetails = document.getElementById('medical_details');
    var addButton = document.getElementById('add_medical_field');
    var paragraph = document.querySelector('#bbbb p');

    medicalRadio.forEach(function(radio) {
        if (radio.checked && radio.value === '有') {
            medicalDetails.style.display = 'block'; 
            paragraph.style.display = 'block'; 
            addButton.style.display = 'block'; 
            addMedicalField(); 
        }
    });

    medicalRadio.forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (radio.value === '有') {
                medicalDetails.style.display = 'block'; 
                paragraph.style.display = 'block'; 
                addButton.style.display = 'block'; 
                addMedicalField(); 
            } else {
                medicalDetails.style.display = 'none'; 
                medicalDetails.innerHTML = ''; 
                paragraph.style.display = 'none'; 
                addButton.style.display = 'none'; 
            }
        });
    });

    function addMedicalField() {
        var newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'medical_content[]';
        newInput.placeholder = '輸入寵物的病史紀錄...';

        var deleteButton = document.createElement('button');
        deleteButton.className = 'delete-button';
        deleteButton.type = 'button';
        deleteButton.textContent = '-';
        deleteButton.addEventListener('click', function() {
            medicalDetails.removeChild(newInput); 
            medicalDetails.removeChild(deleteButton); 
        });

        medicalDetails.appendChild(newInput); 
        medicalDetails.appendChild(deleteButton);
    }

    addButton.addEventListener('click', function() {
        addMedicalField(); 
    });
});
</script>




<style>
    .delete-button {
        margin-left: 10px;
        padding: 10px 15px;
        background-color: #deb887;
        color: #000;
        font-size: 12px;
        border: none;
        border-radius: 2px;
        margin: 10px;
        cursor: pointer; 
    }

    #pet_variety{
        font-size: 16px;
    font-weight: 500;
    border-radius: 5px;
    padding: 8px 13px;
    border: none;
    background-color: #fff;
    width: 100px;
    }

    #pet_variety:focus{
        border: none;
        outline: none;
    }
</style>

</body>
</html>