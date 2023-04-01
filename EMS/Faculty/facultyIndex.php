<html>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
<head>
<?php include("facultyHeader.php"); 
$role = $_SESSION['role'];
if($role != "F")
{
	echo "<center>";
	echo "You are trying to access a BAD Page. <a href='../index.php'>Login Again</a> ";
	echo "</center>";
	session_destroy();
}
else{
	include("dbConnection.php"); 
	include("facultyMenu.php"); ?>

</head>

<body>
<?php
$sql1="SELECT * FROM faculty_tab WHERE facID = '$userID'";
$result1=$connect->query($sql1);
$row1 = $result1->fetch_assoc();
$_SESSION['department'] = $row1['department'];
?>
<center>
<table>
	<tr>
		<td> 
			<div class="box"> Username:  <?php echo $userID; ?><br>
			Name: <?php echo $row1['facName']; ?>
			</div>
		</td>
		<td> 
			<div class="box"> Join Date: <?php echo $row1['DOJ']; ?> <br>
			Skills/Qualifications:  <?php echo $row1['qualification']; ?></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="box"> Department: <?php echo $row1['department']; ?></div>
		</td>
	</tr>
</table>
</center>
<?php } ?>
</body>
</html>