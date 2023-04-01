<html>
<?php include("studentHeader.php"); ?>
<?php include("studentMenu.php"); ?>


<?php 
	include("dbConnection.php"); 
?>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel = "styleSheet" href = "CSS/studentStyles.css">
	<script src = "JS/studentScript.js"></script>

<head>
</head>

<body>
<?php
$courseID = $_POST['courseID'];
$sql_check = "SELECT * FROM registration_tab WHERE courseID = '$courseID' AND stuID = '$userID'";
$result_check = $connect->query($sql_check);
if ($result_check->num_rows > 0) {
  ?>
  <table>
    <tr>
      <td><h2>You have already registered for this class!</h2></td>
      <td><a href="register.php" class="drp"><button name="return">Return</button></a></td>
    </tr>
  </table>
  <?php
} 
else {
	$sql1 = "SELECT * FROM courses_tab WHERE courseID = '$courseID'";
	$result1=$connect->query($sql1);
	if($result1 && $result1->num_rows > 0) 
	{
		$row1 = $result1->fetch_assoc();
		$letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$numbers = '0123456789';
		$regID = substr(str_shuffle($letters), 0, 2) . '-' . substr(str_shuffle($numbers), 0, 2);
		$facID = $row1['facID'];
		$semester = $row1['offeredIn'];
		$insert = "INSERT INTO registration_tab (regID, courseID, stuID, facID, semester) 
				VALUES ('$regID', '$courseID', '$userID', '$facID', '$semester')";
				if ($connect->query($insert) === TRUE) 
						{
							?>
							<center>
							<table>
							<tr>
								<td><h2>Class Registered!</h2></td>
								<td><a href = "register.php" class = "drp"><button name = "return">Return</button></a></td>
							</tr>
							</table>
							</center>
							<?php
						}
				else
				{
					?>
					<center>
					<table>
					<tr>
						<td><h2>Class Failed to Register!</h2></td>
						<td><a href = "register.php" class = "drp"><button name = "return">Return</button></a></td>
					</tr>
					</table>
					</center>
					<?php
				}
	}
	else{
		?>
		<center>
		<table>
		<tr>
			<td><h2>No Class Found!</h2></td>
			<td><a href = "register.php" class = "drp"><button name = "return">Return</button></a></td>
		</tr>
		</table>
		</center>
		<?php
	}
}
	?>
</center>
</body>
</html>