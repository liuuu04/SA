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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img"
        style="background-image: url(images/pet-1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
                    <h2 class="mb-4" style="color: black;">刊登寵物資訊</h2>
                    <form action="" method="post" class="appointment" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="寵物名字" name="pet_name" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="pet_age" id="pet_age" class="form-control" required>
                                                <option disabled selected hidden>年齡</option>
                                                <option value="幼年0~1">幼年0~1</option>
                                                <option value="青少年2~3">青少年2~3</option>
                                                <option value="成年4~8">成年4~8</option>
                                                <option value="老年8+">老年8+</option>
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
                                    <input type="text" class="form-control" placeholder="品種" name="pet_variety">
                                </div>
                            </div>
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
                                            <select name="pet_ligation" id="pet_ligation_select" class="form-control" required
                                                onchange="toggleMedicalField()">
                                                <option disabled selected hidden>病史</option>
                                                <option value="有病史">有病史</option>
                                                <option value="無病史">無病史</option>
                                                <option value="不確定">不確定</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="pet_ligation_text" style="display: none;">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="請輸入相關病史" name="pet_medical"
                                        required>
                                </div>
                            </div>
                            <script>
                                function toggleMedicalField() {
                                    var petLigation = document.getElementById("pet_ligation_select").value;
                                    var medicalField = document.getElementById("pet_ligation_text");

                                    if (petLigation === "有病史") {
                                        medicalField.style.display = "block";
                                        document.querySelector('input[name="pet_medical"]').setAttribute("required", "true");
                                    } else {
                                        medicalField.style.display = "none";
                                        document.querySelector('input[name="pet_medical"]').removeAttribute("required");
                                    }
                                }

                            </script>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date" placeholder="刊登日期"
                                            disabled>
                                            <input type="hidden" name="pet_publish" value="<?php echo date("Y-m-d"); ?>">
                                    </div>
                                </div>
                            </div>
                            <script>
                                var today = new Date();
                                var dd = String(today.getDate()).padStart(2, '0');
                                var mm = String(today.getMonth() + 1).padStart(2, '0'); // 一月是 0
                                var yyyy = today.getFullYear();

                                today = yyyy + '-' + mm + '-' + dd;
                                document.querySelector('.appointment_date').value = today;
                            </script>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="photo" style="color: black;">上傳寵物照片：</label>
                                    <input type="file" id="photo" name="pet_photo" style="color: black;">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="寵物說明欄位"
                                        name="pet_explain"></textarea>
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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_name = $_POST['pet_name'];
    $pet_age = $_POST['pet_age'];
    $pet_gender=$_POST['pet_gender'];
    $pet_type=$_POST['pet_type'];
    $pet_variety=$_POST['pet_variety'];
    $pet_color=$_POST['pet_color'];
    $pet_size=$_POST['pet_size'];
    $pet_address=$_POST['pet_address'];
    $pet_character = $_POST['pet_character'];
    $pet_ligation=$_POST['pet_ligation'];
    $pet_medical=$_POST['pet_medical'];
    $pet_withkidpet=$_POST['pet_withkidpet'];
    $pet_heart=$_POST['pet_heart'];
    $pet_explain=$_POST['pet_explain'];
    $pet_publish = date("Y-m-d");
    
    $link = mysqli_connect('localhost', 'root', '', 'sa');
    if ($link->connect_error) {
        die("連接失敗：" . $link->connect_error);
    }
    $sql = "INSERT INTO pet (pet_name,pet_age,pet_character,pet_medical,
    pet_type,pet_variety,pet_color,pet_gender,pet_size,pet_address,pet_ligation,
    pet_publish,pet_withkidpet,pet_heart,pet_explain) 
    VALUES ('$pet_name','$pet_age','$pet_character','$pet_medical',
    '$pet_type','$pet_variety','$pet_color','$pet_gender','$pet_size','$pet_address',
    '$pet_ligation','$pet_publish','$pet_withkidpet','$pet_heart','$pet_explain')";

    if (mysqli_query($link, $sql)) {
        $last_insert_id = mysqli_insert_id($link);//流水號
    } else {
        echo "錯誤：" . $sql . "<br>" . mysqli_error($link);
    }

    if(isset($_FILES['pet_photo']) && $_FILES['pet_photo']['error'] === UPLOAD_ERR_OK) {
        if (!file_exists('pet')) {
            mkdir('pet');
        }

        $file_destination = 'pet/' . $last_insert_id;
        $file_name = $_FILES['pet_photo']['name'];
        $file_tmp = $_FILES['pet_photo']['tmp_name'];
        if(move_uploaded_file($file_tmp, $file_destination))// 將上傳的檔案移動到目標位置
        {  
            $sql_update = "UPDATE pet SET pet_photo = '$file_destination' WHERE pet_id = $last_insert_id";
            if (mysqli_query($link, $sql_update)) {
                // echo "寵物資料及圖片上傳成功";
                echo "<script>Swal.fire({
                    icon: 'success',
                    title: '上傳成功',
                    text: '寵物資料及圖片已成功上傳！',
                });</script>";
            } else {
                // echo "更新 pet_photo 欄位失敗：" . $sql . "<br>" . mysqli_error($link);
                echo "<script>Swal.fire({
                        icon: 'error',
                        title: '錯誤',
                        text: '更新 pet_photo 欄位失敗',
                    });</script>";
            }
        }
    } else {
        // echo "檔案上傳失敗";
        echo "<script>Swal.fire({
            icon: 'error',
            title: '錯誤',
            text: '寵物資料上傳失敗',
            });</script>";
    }
    }
?>

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
