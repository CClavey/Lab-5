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
	$facID = $_POST['facID'];
	$checkUser = "SELECT userID FROM users_tab WHERE userID = '$facID'";
	$result1 = $connect->query($checkUser);
	if ($result1->num_rows == 0)
	{
		$facName = $_POST['name'];
		$password = $_POST['pwd'];
		$join = $_POST['join'];
		$department = $_POST['deptName'];
		$qualification = $_POST['qual'];
		$insert = "INSERT INTO users_tab (userID, password, role) 
		VALUES ('$facID', '$password', 'F')";
		$insert2 = "INSERT INTO faculty_tab (facID, facName, DOJ, qualification, department) 
		VALUES ('$facID', '$facName', '$join', '$qualification', '$department')";
		if (($connect->query($insert) == TRUE) && ($connect->query($insert2) == TRUE)) 
		{
			?>
			<center>
			<table>
			<tr>
				<td><h2>Faculty Created!</h2></td>
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
				<td><h2>Faculty Failed to be Created!</h2></td>
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
				<td><h2>Faculty or Faculty ID Already Exists!</h2></td>
				<td><a href = "adminIndex.php" class = "drp"><button name = "return">Return</button></a></td>
			</tr>
			</table>
			</center> <?php
		$exists = true;
	}
}

?>