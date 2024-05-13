<?php
session_start();
include('connection.php');
if (!isset($_SESSION['identify'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['update'])) {
    
    $pet_id = $_POST['pet_id'];
    $pet_name = $_POST['pet_name'];
    $pet_age = $_POST['pet_age'];
    $pet_gender = $_POST['pet_gender'];
    $pet_type = $_POST['pet_type'];
    $pet_variety = $_POST['pet_variety'];
    $pet_color = $_POST['pet_color'];
    $pet_size = $_POST['pet_size'];
    $pet_address = $_POST['pet_address'];
    $pet_character = $_POST['pet_character'];
    $pet_ligation = $_POST['pet_ligation'];
    $pet_medical = $_POST['pet_medical'];
    $pet_withkidpet = $_POST['pet_withkidpet'];
    $pet_heart = $_POST['pet_heart'];
    $pet_explain = $_POST['pet_explain'];
    $pet_publish = date("Y-m-d");

    $update_query = "UPDATE pet SET 
                    pet_name='$pet_name', 
                    pet_age='$pet_age', 
                    pet_gender='$pet_gender', 
                    pet_type='$pet_type', 
                    pet_variety='$pet_variety', 
                    pet_color='$pet_color', 
                    pet_size='$pet_size', 
                    pet_address='$pet_address', 
                    pet_character='$pet_character', 
                    pet_ligation='$pet_ligation', 
                    pet_medical='$pet_medical', 
                    pet_withkidpet='$pet_withkidpet', 
                    pet_heart='$pet_heart', 
                    pet_explain='$pet_explain', 
                    pet_publish='$pet_publish' 
                    WHERE pet_id='$pet_id'";
    
    mysqli_query($conn, $update_query);

   
    header("Location: showpet.php"); 
    exit();
}
?>
