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
                    <h2 class="mb-4">刊登寵物資訊</h2>
                    <form action="pet_upload.php" method="post" class="appointment">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="寵物名字" name="pet_name" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="年齡" name="pet_age" required>
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
                                                <option value="有，">有</option>
                                                <option value="無">無</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="pet_ligation_text" style="display: none;">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="病史" name="pet_medical"
                                        required>
                                </div>
                            </div>
                            <script>
                                function toggleMedicalField() {
                                    var petLigation = document.getElementById("pet_ligation_select").value;
                                    var medicalField = document.getElementById("pet_ligation_text");

                                    if (petLigation === "yes") {
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
                                    <input type="text" class="form-control" placeholder="與小孩相處是否融洽" name="pet_withkid"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="與其他寵物相處是否融洽" name="pet_withpet"
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
                                            name="pet_publish" disabled>
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
                                    <label for="photo" style="color: white;">上傳寵物照片：</label>
                                    <input type="file" id="photo" name="pet_photo" style="color: white;">
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
                                    <a href=""><input type="submit" value="發布" class="btn btn-primary py-3 px-4"
                                            style="font-size:16px;"></a>
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
                stroke="#F96D00" />
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