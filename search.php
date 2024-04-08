<form action="search.php" method="GET">
    <input type="text" name="keyword" placeholder="輸入關鍵字">
    <button type="submit">搜索</button>
</form>

<?php
// Connect to the database
$link = mysqli_connect('localhost', 'root', '', 'SA');

// Check the connection
if (!$link) {
    die("連接失敗: " . mysqli_connect_error());
}

// Handle form submission
if(isset($_GET['keyword'])) {
    // Sanitize and prepare the search keyword
    $keyword = mysqli_real_escape_string($link, $_GET['keyword']);

    // Construct the SQL query with parameterized query
    $sql = "SELECT * FROM Pet WHERE 
    pet_id LIKE '%{$keyword}%' OR 
    pet_name LIKE '%{$keyword}%' OR
    pet_age LIKE '%{$keyword}%' OR
    pet_character LIKE '%{$keyword}%' OR
    pet_medical LIKE '%{$keyword}%' OR
    pet_type LIKE '%{$keyword}%' OR
    pet_variety LIKE '%{$keyword}%' OR
    pet_color LIKE '%{$keyword}%' OR
    pet_gender LIKE '%{$keyword}%' OR
    pet_size LIKE '%{$keyword}%' OR
    pet_address LIKE '%{$keyword}%' OR
    pet_publish LIKE '%{$keyword}%' OR
    pet_explain LIKE '%{$keyword}%' OR
    account_id LIKE '%{$keyword}%'";

    // Execute the query
    $result = mysqli_query($link, $sql);

    // Display search results
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "寵物編號： " . $row["pet_id"]. "<br>";
            echo "寵物名字： " . $row["pet_name"]. "<br>";
            echo "年齡： " . $row["pet_age"]. "<br>";
            echo "個性： " . $row["pet_character"]. "<br>";
            echo "病史： " . $row["pet_medical"]. "<br>";
            echo "種類： " . $row["pet_type"]. "<br>";
            echo "品種： " . $row["pet_variety"]. "<br>";
            echo "毛色： " . $row["pet_color"]. "<br>";
            echo "性別： " . $row["pet_gender"]. "<br>";
            echo "體型： " . $row["pet_size"]. "<br>";
            echo "縣市： " . $row["pet_address"]. "<br>";
            echo "刊登日期： " . $row["pet_publish"]. "<br>";
            echo "與小孩是否相處融洽： " . $row["pet_withkid"]. "<br>";
            echo "與其他寵物是否相處融洽： " . $row["pet_withpet"]. "<br>";
            echo "寵物照片：<img src='data:image/jpeg;base64,'.base64_encode($row['pet_photo']).'<br>' />";
            echo "寵物說明欄： " . $row["pet_explain"]. "<br>";
            echo "使用者帳號： " . $row["account_id"]. "<br>";

            echo "<hr>";
        }
    } else {
        echo "查無結果";
    }
}

// Close the database connection
mysqli_close($link);
?>
