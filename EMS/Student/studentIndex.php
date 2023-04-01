<html>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
<head>
<?php include("studentHeader.php"); 
$role = $_SESSION['role'];
if($role != "S")
{
	echo "<center>";
	echo "You are trying to access a BAD Page. <a href='../index.php'>Login Again</a> ";
	echo "</center>";
	session_destroy();
}
else{
	include("dbConnection.php"); 
	include("studentMenu.php"); ?>

</head>

<body>
<?php
$sql1="SELECT * FROM student_tab WHERE stuID = '$userID'";
$result1=$connect->query($sql1);
$row1 = $result1->fetch_assoc();
$_SESSION['major'] = $row1['major'];
?>
<center>
<table>
	<tr>
		<td> 
			<div class="box"> Username:  <?php echo $userID; ?><br>
			Name: <?php echo $row1['stuName']; ?>
			</div>
		</td>
		<td> 
			<div class="box"> GPA: <?php echo $row1['GPA']; ?> <br>
			Expected Graduation Year:  <?php echo $row1['gradDate']; ?></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="box"> Major: <?php echo $row1['major']; ?></div>
		</td>
	</tr>
</table>
</center>
<?php } ?>
</body>
</html>