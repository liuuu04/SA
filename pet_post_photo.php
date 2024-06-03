<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>刊登寵物照片</title>
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="css/style1.css">
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


        

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { top: 60%; opacity: 0; }
            to { top: 50%; opacity: 1; }
        }

       

       .body{
        background-color: #fff;
        font-weight: 550;
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
              <li class="nav-item"><a href="index.php" class="nav-link">首頁</a></li>
              <li class="nav-item"><a href="pet_knowledge.php" class="nav-link">寵物知識專區</a></li>
              <li class="nav-item"><a href="services.html" class="nav-link">討論區</a></li>
              
            </ul>
          </div>
        </div>
        

        <?php session_start(); ?>
        <?php if(isset($_SESSION['identify_photo']) && isset($_SESSION['name'])): ?>
            <div class="bells">
                <a href="logout.php"><img src="images/logout.png" style="width: 25px;height: 25px;margin-right:20px;"></a>
            </div>
        <?php endif; ?>

            <div class="dropdown">
                <?php if(isset($_SESSION['identify_photo']) && isset($_SESSION['name'])): ?>
                    <button class="intromy"><a href="#"><img src="<?php echo $_SESSION['identify_photo']; ?>" style="border-radius: 50%;"><span><?php echo $_SESSION['name'];?></span></a></button>
                    <div class="dropdown-content" id="intromyDropdown">
                        <a href="view.php">查看個人檔案</a>
                        <a href="collect.php">已收藏寵物</a>
                        <a href="pet_post.php">刊登寵物</a>
                        <a href="viewpet.php">已刊登寵物</a>
                        <a href="viewheart.php">愛心切結書審核</a>
                        <a href="heart.docx">下載愛心認養切結書</a>
                    </div>
                <?php else: ?>
                    <button class="intromy"><a href="login.php"  style="color: black;">登入/註冊</a></button>
                    <div class="dropdown-content" id="intromyDropdown">
                    </div>
                <?php endif; ?>
            </div>
        
      </div>
      
      </nav>
<br>
<?php
   $pet_id=$_GET['pet_id'];
   ?>
   
   <style>
      .playgrid{
        display: grid;
        grid-template-columns: 1fr 1fr;
       
      }

      #leftside{
        height: auto;
      }

      #rightside{
        height: auto;
      }

      #rightside img{
        max-width: 800px;
        height: auto;
      }

      #fileUploadForm{
        margin-left: 60px;
      }
      .preview-image-container {
        position: relative;
        display: inline-block;
        margin: 10px;
    }

    .preview-image {
        max-width: 140px;
        max-height: 140px;
        min-height: 140px;
        object-fit: contain;
    }

    .delete-button {
        position: absolute;
        top: 0;
        left: 0;
        background: #f0f0f0;
        color: black;
        border: none;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        cursor: pointer;
    }
   </style>
   <div class="playgrid">
   <div id="leftside">
   <form id="fileUploadForm" action="pet_upload_photo.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>">
    <h3>刊登您的寵物照片</h3>
    <div class="col-md-9">
        <div class="form-group">
            <label for="new_pet_photo" style="color: black;">寵物首頁照片：</label>
            <input type="file" style="font-size: 16px;color: black;" name="new_pet_photo" id="new_pet_photo">
            <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 400px; max-height: 400px;">
        </div>
    </div>

    <div class="col-md-9">
        <div class="form-group">
            <label for="files1" style="color: black;">寵物詳細照片：</label>
            <input type="file" name="files1[]" id="fileInput" multiple style="color: black;font-size: 16px;">
            <div id="customImagePreview"></div>
        </div>
    </div>

    <input type="submit" value="刊登" id="photobtn" style="background-color:#dbd2c9; color:#000;font-size: 16px; font-weight: 550; border:none;padding:5px 40px; border-radius: 6px;">
    <br><br>
    <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 400px; max-height: 400px;">
    請您先選擇寵物封面圖，封面圖將於首頁顯示，一次只能選擇一張。再選擇寵物詳細照片，將於寵物詳細頁面展示。您可以在編輯寵物區更改或上傳新的照片。
    <?php
var_dump($pet_id);?>

</form>

    </div>

    <div id="rightside">
    <img src="寵物介紹1.jpg">
    <img src="寵物介紹.jpg">
    </div>

    </div>
<script>
    function deletePhoto(petId, petphotoId) {
    if (confirm("確定要刪除這張照片嗎？")) {
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = 'editdelete.php';
        
        var petIdField = document.createElement('input');
        petIdField.type = 'hidden';
        petIdField.name = 'pet_id';
        petIdField.value = petId;
        form.appendChild(petIdField);
        
        var petphotoIdField = document.createElement('input');
        petphotoIdField.type = 'hidden';
        petphotoIdField.name = 'petphoto_id';
        petphotoIdField.value = petphotoId;
        form.appendChild(petphotoIdField);
        
        document.body.appendChild(form);
        form.submit();
    }
}

</script>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    const fileInput = document.getElementById('fileInput');
    const customImagePreview = document.getElementById('customImagePreview');
    let selectedFiles = [];

    fileInput.addEventListener('change', function(event) {
        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            selectedFiles.push(file);
            const reader = new FileReader();
            reader.onload = (function(file) {
                return function(e) {
                    const previewContainer = document.createElement('div');
                    previewContainer.className = 'preview-image-container';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'preview-image';

                    const deleteButton = document.createElement('button');
                    deleteButton.className = 'delete-button';
                    deleteButton.innerHTML = '×';
                    deleteButton.onclick = function() {
                        const index = selectedFiles.indexOf(file);
                        if (index > -1) {
                            selectedFiles.splice(index, 1);
                        }
                        previewContainer.remove();
                        updateFileInput();
                    };

                    previewContainer.appendChild(img);
                    previewContainer.appendChild(deleteButton);
                    customImagePreview.appendChild(previewContainer);
                };
            })(file);
            reader.readAsDataURL(file);
        }
    });

    function updateFileInput() {
        const dataTransfer = new DataTransfer();
        selectedFiles.forEach(file => dataTransfer.items.add(file));
        fileInput.files = dataTransfer.files;
    }

    document.getElementById('new_pet_photo').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const imagePreview = document.getElementById('imagePreview');
        const reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    });
});





</script>

    


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









</body>
</html>