<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: url("images/bgpet.png") no-repeat center center fixed;
          background-size: cover;
          font-family: Arial, sans-serif;
        }
        .pet-card {
            width:105%;
            margin-top: 200px;
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;width: 50%; 
            border-radius: 8px;
            margin: 80px auto; 
            padding: 40px; 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .pet-photo {
            max-width:400px;
            max-height:400px;
        }
        .pet-info {
            padding: 20px;
            
        }
        .pet-info h2 {
            margin-top: 0;
        }
        .pet-info p {
            margin: 10px 0;
        }
        .button{
            color: #000;
          font-weight: 600;
          background-color: #bdbdbd;
          padding: 10px 20px 10px 20px;
          font-size: 16px;
          border-radius: 30px;
          border: none;
          transition: background-color 0.3s ease;
          border: none;
          text-decoration: none;
          margin-right: 5px;
         
        }

        .button1{
            color: #000;
          font-weight: 600;
          background-color: #f5f5dc;
          padding: 10px 20px 10px 20px;
          font-size: 16px;
          border-radius: 30px;
          border: none;
          transition: background-color 0.3s ease;
          border: none;
          text-decoration: none;
          margin-right: auto;
         
        }
    </style>
</head>
<body>
<?php
$report_id = $_GET['report_id'];
include 'connection.php';

$sql = "SELECT report.*, pet.pet_name, pet.pet_age, pet.pet_character, pet.pet_photo, pet.pet_color, pet.pet_address, pet.pet_gender, pet.pet_type, pet.pet_explain
        FROM report 
        LEFT JOIN pet ON report.pet_id = pet.pet_id 
        WHERE report.report_id='$report_id'";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    $report_id = $row['report_id'];
    $reportedidentify = $row['reportedidentify'];
    $content = $row['content'];
    $comment = $row['comment'];
    $pet_name = $row['pet_name'];
    $pet_age = $row['pet_age'];
    $pet_character = $row['pet_character'];
    $pet_photo = $row['pet_photo'];
    $pet_color = $row['pet_color'];
    
        $pet_address = $row['pet_address'];
        $pet_type = $row['pet_type'];
        $pet_explain = $row['pet_explain'];
}
?>

<div class="pet-card">
    
            <img class="pet-photo"src="<?php echo $pet_photo; ?>" alt="Pet Photo">
        <h3 class="button1"><strong>宠物信息</strong></h3>
       
        <hr>
       
            <p><strong>寵物名字:</strong><?php echo $pet_name; ?></p>
            <p><strong>寵物年齡:</strong> <?php echo $pet_age; ?></p>
            <p><strong>寵物性格:</strong> <?php echo $pet_character; ?></p>
            <p><strong>寵物毛色:</strong> <?php echo $pet_color; ?></p>
            <p><strong>寵物縣市:</strong> <?php echo $pet_address; ?></p>
            <p><strong>寵物說明欄:</strong> <?php echo $pet_explain; ?></p>
            <br>
            <h3 class="button1"><strong>被檢内容</strong></h3>
            <hr>
            <p><strong>檢舉号:</strong> <?php echo $report_id; ?></p>
            <p><strong>被檢舉id:</strong> <?php echo $reportedidentify; ?></p>
            <p><strong>被檢内容:</strong> <?php echo $content; ?></p>
            <p><strong>被檢評論:</strong> <?php echo $comment; ?></p><br>
            <a class="button" href="vadmin.php">回去</a>
        
    </div>
    
</body>
</html>
