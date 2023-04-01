<html>
<head>
<?php include("adminHeader.php"); ?>
<?php include("adminMenu.php"); ?>
<?php include("dbConnection.php"); ?>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel = "styleSheet" href = "CSS/adminStyles.css">
</head>

<body>
<?php
$exists = true;
while ($exists == true)
{
	$stuID = $_POST['stuID'];
	$checkUser = "SELECT userID FROM users_tab WHERE userID = '$stuID'";
	$result1 = $connect->query($checkUser);
	if ($result1->num_rows == 0)
	{
		$stuName = $_POST['name'];
		$password = $_POST['pwd'];
		$enroll = $_POST['enroll'];
		$major = $_POST['deptName'];
		$GPA = $_POST['gpa'];
		$grad = $_POST['grad'];
		$insert = "INSERT INTO users_tab (userID, password, role) 
		VALUES ('$stuID', '$password', 'S')";
		$insert2 = "INSERT INTO student_tab (stuID, stuName, enrollDate, major, GPA, gradDate) 
		VALUES ('$stuID', '$stuName', '$enroll', '$major', '$GPA', '$grad')";
		if (($connect->query($insert) == TRUE) && ($connect->query($insert2) == TRUE)) 
		{
			?>
			<center>
			<table>
			<tr>
				<td><h2>Student Created!</h2></td>
				<td><a href = "adminIndex.php" class = "drp"><button name = "return">Return</button></a></td>
			</tr>
			</table>
			</center>
			<?php
		} 
		else 
		{
			?><center>
			<table>
			<tr>
				<td><h2>Student Failed to be Created!</h2></td>
				<td><a href = "adminIndex.php" class = "drp"><button name = "return">Return</button></a></td>
			</tr>
			</table>
			</center>
			<?php
		}
		$exists = false;
	}
	else
	{
		?> <center>
			<table>
			<tr>
				<td><h2>Student or Student ID Already Exists!</h2></td>
				<td><a href = "adminIndex.php" class = "drp"><button name = "return">Return</button></a></td>
			</tr>
			</table>
			</center> <?php
		$exists = true;
	}
}

?>