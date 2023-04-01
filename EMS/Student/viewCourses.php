<html>
<?php include("studentHeader.php"); ?>
<?php include("studentMenu.php"); ?>


<?php 
	$major = $_SESSION['major'];
	include("dbConnection.php"); 
?>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel = "styleSheet" href = "CSS/studentStyles.css">
<head>
</head>

<body>
<?php
$sql1="SELECT * FROM courses_tab WHERE type = '$major'";
$result1=$connect->query($sql1);
echo "<center>";
echo "<table>";
while($row1 = $result1->fetch_assoc())
	{
		$sql2="SELECT * FROM faculty_tab WHERE facID = '$row1[facID]'";
		$result2=$connect->query($sql2); 
		$row2 = $result2->fetch_assoc();
?>
	<tr>
		<td> 
			<div class="box"> Course Name: <?php echo $row1['courseName']; ?><br>
				Course ID: <?php echo $row1['courseID']; ?>
			</div>
		</td>
		<td> 
			<div class="box"> Offered: <?php echo $row1['offeredIn']; ?> <br>
			Credits:  <?php echo $row1['Credits']; ?>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="box"> Pre-Requisites: <?php echo $row1['preReq']; ?> <br>
			Department: <?php echo $row1['type']; ?></div>
		</td>
		<td>
			<div class="box"> Professor: <?php echo $row2['facName']; ?></div>
		</td>
	</tr>
<?php } ?>
</table>
</center>
</body>
</html>