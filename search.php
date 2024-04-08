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
            echo "pet_id: " . $row["pet_id"]. "<br>";
            echo "pet_name: " . $row["pet_name"]. "<br>";
            echo "pet_age: " . $row["pet_age"]. "<br>";
            echo "pet_character: " . $row["pet_character"]. "<br>";
            echo "pet_medical: " . $row["pet_medical"]. "<br>";
            echo "pet_type: " . $row["pet_type"]. "<br>";
            echo "pet_variety: " . $row["pet_variety"]. "<br>";
            echo "pet_color: " . $row["pet_color"]. "<br>";
            echo "pet_gender: " . $row["pet_gender"]. "<br>";
            echo "pet_size: " . $row["pet_size"]. "<br>";
            echo "pet_address: " . $row["pet_address"]. "<br>";
            echo "pet_publish: " . $row["pet_publish"]. "<br>";
            echo "pet_explain: " . $row["pet_explain"]. "<br>";
            echo "account_id: " . $row["account_id"]. "<br>";

            echo "<hr>";
        }
    } else {
        echo "查無結果";
    }
}

// Close the database connection
mysqli_close($link);
?>
