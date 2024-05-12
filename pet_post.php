<!DOCTYPE html>
<html lang="en">

<head>
    <title>寵物刊登</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

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

    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img"
        style="background-image: url(images/back.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
                    <h2 class="mb-4" style="color: black;">刊登寵物資訊</h2>
                    <form action="pet_upload.php" method="post" class="appointment" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="寵物名字" name="pet_name" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="年齡" name="pet_age" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="pet_gender" id="pet_gender" class="form-control" required>
                                                <option disabled selected hidden>性別</option>
                                                <option value="公">公</option>
                                                <option value="母">母</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="pet_type" id="pet_type" class="form-control" required>
                                                <option disabled selected hidden>種類</option>
                                                <option value="狗">狗</option>
                                                <option value="貓">貓</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="pet_variety" id="pet_variety" class="form-control" required>
                                                <option disabled selected hidden>品種</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="other_breed" style="display: none;"> <!-- Hidden text input -->
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="text" name="other_breed_text" id="other_breed_text" class="form-control" placeholder="請輸入品種">
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('pet_type').addEventListener('change', function() {
                                    var petType = this.value;
                                    var breedSelect = document.getElementById('pet_variety');
                                    breedSelect.innerHTML = ''; // Clear previous options

                                    if (petType === '狗') {
                                        var dogBreeds = ['台灣犬','吉娃娃','博美','約克夏','馬爾濟斯','雪納瑞','米格魯','臘腸犬','貴賓犬','鬥牛犬','比熊','柴犬','柯基','秋田犬','拉布拉多','黃金獵犬', '柯基', '哈士奇','杜賓','古代牧羊犬'];
                                        showBreeds(dogBreeds);
                                    } else if (petType === '貓') {
                                        var catBreeds = ['米克斯貓', '曼赤肯', '蘇格蘭摺耳貓','暹羅貓','英國短毛貓', '美國短毛貓','布偶貓'];
                                        showBreeds(catBreeds);
                                    }
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

                                    document.getElementById('breed_select').style.display = 'block';
                                }

                                document.getElementById('pet_variety').addEventListener('change', function() {
                                    var breed = this.value;
                                    if (breed === '其他') {
                                        document.getElementById('other_breed').style.display = 'block'; // Show text input
                                    } else {
                                        document.getElementById('other_breed').style.display = 'none'; // Hide text input
                                    }
                                });
                            </script>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="毛色" name="pet_color" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="pet_size" id="pet_size" class="form-control" required>
                                                <option disabled selected hidden>體型</option>
                                                <option value="大">大</option>
                                                <option value="中">中</option>
                                                <option value="小">小</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="pet_address" id="pet_address" class="form-control" required>
                                                <option disabled selected hidden>縣市</option>
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="個性" name="pet_character"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="與小孩、寵物相處是否融洽" name="pet_withkidpet"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="pet_heart" id="pet_heart" class="form-control" required>
                                                <option disabled selected hidden>是否需要簽署愛心認養切結書</option>
                                                <option value="是">是，需要簽署愛心認養切結書</option>
                                                <option value="否">否，不需要簽署愛心認養切結書</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="pet_ligation" id="pet_ligation" class="form-control" required>
                                                <option disabled selected hidden>結紮與否</option>
                                                <option value="已結紮">已結紮</option>
                                                <option value="尚未結紮">未結紮</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="pet_medical_select" id="pet_medical_select" class="form-control" required
                                                onchange="toggleMedicalField()">
                                                <option disabled selected hidden>病史</option>
                                                <option value="有">有病史</option>
                                                <option value="無">無病史</option>
                                                <option value="不確定">不確定</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="medical_history" style="display: none;">
                                <div class="form-group" style="display: flex; align-items: left;">
                                    <div class="form-field">
                                        <input type="text" name="pet_medical[]" class="form-control" placeholder="病史" style="margin-left: 15px;width:230px;">
                                    </div>
                                    <!-- <div class="form-field">
                                        <input type="date" name="pet_medical_date[]" class="form-control" placeholder="病史" style="margin-left: 30px;">
                                    </div> -->
                                    <div class="form-group">
                                        <button type="button" onclick="addMedicalHistoryField()" class="btn btn-primary" style="width:50px;margin-top:5px;margin-left:60px;">＋</button>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function toggleMedicalField() {
                                    var petmedical = document.getElementById("pet_medical_select").value;
                                    var medicalField = document.getElementById("medical_history");

                                    if (petmedical === "有") {
                                        medicalField.style.display = "block";
                                    } else {
                                        medicalField.style.display = "none";
                                    }
                                }

                                function addMedicalHistoryField() {
                                    var medicalHistoryContainer = document.getElementById("medical_history");
                                    var newInputContainer = document.createElement("div");
                                    newInputContainer.className = "form-group";
                                    newInputContainer.style = "display: flex; align-items: left;";

                                    var newInput = document.createElement("input");
                                    newInput.type = "text";
                                    newInput.name = "pet_medical[]";
                                    newInput.className = "form-control";
                                    newInput.placeholder = "病史";
                                    newInput.style = "margin-left: 15px;width:231px;margin-top:-5px";

                                    var newDateInput = document.createElement("input");
                                    newDateInput.type = "date";
                                    // newDateInput.name = "pet_medical_date[]";
                                    newDateInput.className = "form-control";
                                    newDateInput.placeholder = "病史";
                                    newDateInput.style = "margin-left: 30px;margin-top:-5px;width:165px;";

                                    var addButton = document.createElement("button");
                                    addButton.type = "button";
                                    addButton.className = "btn btn-primary";
                                    addButton.textContent = "＋";

                                    var deleteButton = document.createElement("button");
                                    deleteButton.type = "button";
                                    deleteButton.className = "btn btn-primary";
                                    deleteButton.textContent = "─";
                                    deleteButton.style = "margin-left:30px;width:50px;height:45px;";
                                    deleteButton.addEventListener("click", function() {
                                        medicalHistoryContainer.removeChild(newInputContainer);
                                    });

                                    newInputContainer.appendChild(newInput);
                                    newInputContainer.appendChild(deleteButton);

                                    medicalHistoryContainer.appendChild(newInputContainer);
                                }
                            </script>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="photo" style="color: black;">上傳寵物照片：</label>
                                    <input type="file" id="photo" name="pet_photo" style="color: black;" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="pet_explain" id="pet_explain" cols="30" rows="7" class="form-control" placeholder="寵物說明欄位"
                                        ></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="發布" class="btn btn-primary py-3 px-4" style="font-size:16px;">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#DBD2C9" />
        </svg></div>


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
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>