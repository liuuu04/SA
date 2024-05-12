<?php
session_start();

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$currentIdentify = $_SESSION['identify'];

$sql = "SELECT Account.identify, COALESCE(SUM(CASE WHEN message.is_read = 0 THEN 1 ELSE 0 END), 0) AS unread_count
        FROM Account
        LEFT JOIN message ON Account.identify = message.sender_id
        WHERE message.receiver_id = ?
        GROUP BY Account.identify";

$stmt = mysqli_prepare($link, $sql);
if ($stmt === false) {
    die("ERROR: Could not prepare query. " . mysqli_error($link));
}

mysqli_stmt_bind_param($stmt, "s", $currentIdentify);

if (!mysqli_stmt_execute($stmt)) {
    die("ERROR: Could not execute query. " . mysqli_error($link));
}

$result = mysqli_stmt_get_result($stmt);

$contacts = array();

while ($row = mysqli_fetch_assoc($result)) {
    $contacts[] = $row;
}

if ($contacts === false) {
    die("ERROR: Could not fetch results. " . mysqli_error($link));
}

header('Content-Type: application/json');
echo json_encode($contacts);

mysqli_close($link);
?>
