<?php
$suggest_id = $_GET['suggest_id'];

if (!empty($suggest_id)) {
    $link = mysqli_connect('localhost', 'root', '', 'sa');
    if (!$link) {
        die(": " . mysqli_connect_error());
    }
    $sql = "DELETE FROM suggest WHERE suggest_id = '$suggest_id'";
    if (mysqli_query($link, $sql)) {
        echo "建议删除成功";
        header("Location: manager.php");
        exit(); 
    } else {
        echo "错误: " . $sql . "<br>" . mysqli_error($link);
    }

    mysqli_close($link);
} else {
    echo "suggest ID 不存在";
}
?>
