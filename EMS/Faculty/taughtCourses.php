<html>
<?php include("facultyHeader.php"); ?>
<?php include("facultyMenu.php"); ?>


<?php 
	$department = $_SESSION['department'];
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
$sql1="SELECT * FROM courses_tab WHERE type = '$department' AND facID = '$userID'";
$result1=$connect->query($sql1);
echo "<center>";
echo "<table>";
while($row1 = $result1->fetch_assoc())
	{
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
	</tr>
<?php 
$sql2 = "SELECT stuID FROM registration_tab WHERE courseID = '{$row1['courseID']}'";
$result2 = $connect->query($sql2);
echo "<tr>";
while($row2 = $result2->fetch_assoc())
{
	?><td><div class = "box">Student: <?php echo $row2['stuID']; ?></div></td><?php
}
echo "</tr>";
} ?>
</table>
</center>
</body>
</html>