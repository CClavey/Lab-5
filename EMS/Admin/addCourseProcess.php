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
	$courseID = $_POST['courseID'];
	$checkCourse = "SELECT courseID FROM courses_tab WHERE courseID = '$courseID'";
	$result1 = $connect->query($checkCourse);
	if ($result1->num_rows == 0)
	{
		$courseName = $_POST['courseName'];
		$facID = $_POST['facID'];
		$semester = $_POST['semester'];
		$credits = $_POST['credits'];
		$preReq = $_POST['preReq'];
		$deptName = $_POST['deptName'];
		$insert = "INSERT INTO courses_tab (courseID, courseName, facID, offeredIn, credits, preReq, type) 
		VALUES ('$courseID', '$courseName', '$facID', '$semester', '$credits', '$preReq', '$deptName')";
		if ($connect->query($insert) == TRUE) 
		{
			?>
			<center>
			<table>
			<tr>
				<td><h2>Course Created!</h2></td>
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
				<td><h2>Course Failed to be Created!</h2></td>
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
				<td><h2>Course or Course ID Already Exists!</h2></td>
				<td><a href = "adminIndex.php" class = "drp"><button name = "return">Return</button></a></td>
			</tr>
			</table>
			</center> <?php
		$exists = true;
	}
}

?>