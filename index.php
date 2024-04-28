<?php
session_start();
// Include database connection file
include_once('connection.php');
if (!isset($_SESSION['IDENTIFY'])) {
    header("Location:login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Multi user role based application login in php mysqli</title>
       
    </head>

       <body>
     <a href="logout.php">Hi, <?php echo ucwords($_SESSION['NAME']); ?> Log out</a>
	 <?php if ($_SESSION['IDENTIFY_LEVEL'] == 'member' || $_SESSION['IDENTIFY_LEVEL'] == 'adopter') { ?>
			
			<table>
					<tr>
						<th class="button-left">姓名</th>
						
						<td class="button-left"><?php echo ucwords($_SESSION['NAME']); ?></td>
					</tr>
			<tr>
			<th>email : <?php echo ucwords($_SESSION['EMAIL']); ?></th>
			<th>username = <?php echo ucwords($_SESSION['IDENTIFY']); ?> </th><br><br>
			
			<th>IDENTIFY_LEVEL = <?php echo ucwords($_SESSION['IDENTIFY_LEVEL']); ?> </th>
			</tr>  
			</table>
  <?php } ?>
  
    <?php if ($_SESSION['IDENTIFY_LEVEL'] == "adopter")?>
	<?php
	$identify = $_SESSION['IDENTIFY'];

	$query = "SELECT * FROM profile WHERE identify = '$identify'";
    $result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
                <th>Account Name</th>
                <th>Motivation</th>
                <th>Job</th>
                <th>Economic Status</th>
                <th>Number of Kids</th>
                <th>Number of Roommates</th>
                <th>Number of Dogs</th>
                <th>Number of Cats</th>
                <th>Number of Other Animals</th>
                <th>Adoption Experience</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['identify'] . "</td>";
            echo "<td>" . $row['motivation'] . "</td>";
            echo "<td>" . $row['job'] . "</td>";
            echo "<td>" . $row['economic'] . "</td>";
            echo "<td>" . $row['family_kid'] . "</td>";
            echo "<td>" . $row['family_roommate'] . "</td>";
            echo "<td>" . $row['family_dog'] . "</td>";
            echo "<td>" . $row['family_cat'] . "</td>";
            echo "<td>" . $row['family_other'] . "</td>";
            echo "<td>" . $row['experience'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No profiles found.";
    }

    ?> 

  
</body>
</html>