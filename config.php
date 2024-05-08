<?php
// 資料庫主機名
define('DB_HOST', 'localhost');

// 資料庫名稱
define('DB_NAME', 'root');

// 資料庫使用者名
define('DB_USER', '12345678');

// 資料庫密碼
define('DB_PASSWORD', 'sa');

// 建立與資料庫的連接
$link = mysqli_connect(localhost, root, 12345678, sa);

// 檢查連接是否成功
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
