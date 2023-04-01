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
	$deptID = $_POST['deptID'];
	$checkDept = "SELECT deptID FROM department_tab WHERE deptID = '$deptID'";
	$result1 = $connect->query($checkDept);
	if ($result1->num_rows == 0)
	{
		$deptName = $_POST['deptName'];
		$deptChair = $_POST['chair'];
		$deptDean = $_POST['dean'];
		$budget = $_POST['budget'];
		$insert = "INSERT INTO department_tab (deptID, deptName, deptChair, deptDean, budget) 
		VALUES ('$deptID', '$deptName', '$deptChair', '$deptDean', '$budget')";
		if ($connect->query($insert) == TRUE) 
		{
			?>
			<center>
			<table>
			<tr>
				<td><h2>Department Created!</h2></td>
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
				<td><h2>Department Failed to be Created!</h2></td>
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
				<td><h2>Department or Department ID Already Exists!</h2></td>
				<td><a href = "adminIndex.php" class = "drp"><button name = "return">Return</button></a></td>
			</tr>
			</table>
			</center> <?php
		$exists = true;
	}
}

?>