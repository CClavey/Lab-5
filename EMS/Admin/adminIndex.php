<html>
<?php 
	include("dbConnection.php"); 
?>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
<head>
<?php include("adminHeader.php"); 
$role = $_SESSION['role'];
if($role != "A")
{
	echo "<center>";
	echo "You are trying to access a BAD Page. <a href='../index.php'>Login Again</a> ";
	echo "</center>";
	session_destroy();
}
else{
	include("dbConnection.php"); 
	include("adminMenu.php"); ?>
</head>

<body>
<?php
$sql1="SELECT * FROM users_tab WHERE userID = '$userID'";
$result1=$connect->query($sql1);
$row1 = $result1->fetch_assoc();
?>
<center>
<table>
	<tr>
		<td>
			<div class="box"> Administrative User
			</div>
			<div class="box"> Username:  <?php echo $userID; ?>
			</div>
		</td>
	</tr>
</table>
</center>
<?php } ?>
</body>
</html>