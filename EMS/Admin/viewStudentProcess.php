<html>
<?php include("adminHeader.php"); ?>
<?php include("adminMenu.php"); ?>

<?php 
	include("dbConnection.php"); 
?>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel = "styleSheet" href = "CSS/adminStyles.css">

<body>
<?php
$department = $_POST['deptName'];
$sql2 = "SELECT * FROM student_tab WHERE major = '$department'";
$result2 = $connect->query($sql2);
echo "<center>";
echo "<table>";
while($row2 = $result2->fetch_assoc())
	{
?>
	<tr>
		<td> 
			<div class="box"> Name: <?php echo $row2['stuName']; ?>
			</div>
		</td>
		<td> 
			<div class="box"> Major: <?php echo $row2['major']; ?> <br>
			Enroll Date:  <?php echo $row2['enrollDate']; ?></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="box"> GPA: <?php echo $row2['GPA']; ?> <br>
			Graduation Date: <?php echo $row2['gradDate']; ?> </div>
		</td>
	</tr>
<?php } ?>
</table>
</center>
</body>
</html>