<?php
// 建立資料庫連接
$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

// 檢查連接是否成功
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// 檢索使用者輸入的關鍵字
$keyword = $_GET['keyword'];

// 使用關鍵字執行 SQL 查詢
$sql = "SELECT * FROM pet WHERE pet_name LIKE '%$keyword%' OR pet_type LIKE '%$keyword%' OR pet_variety LIKE '%$keyword%' OR pet_gender LIKE '%$keyword%' OR pet_age LIKE '%$keyword%' OR pet_address LIKE '%$keyword%' OR pet_explain LIKE '%$keyword%'";

$result = mysqli_query($link, $sql);

// 檢查是否有查詢結果
if ($result === false) {
    die("ERROR: Could not execute query. " . mysqli_error($link));
    
}



// 釋放結果集
mysqli_free_result($result);

// 關閉資料庫連接
mysqli_close($link);
?>
