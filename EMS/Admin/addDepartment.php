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
$sql2 = "SELECT * FROM department_tab";
$result2 = $connect->query($sql2);
?>
<form name = "addDepartmentForm" method = "POST" action = "addDepartmentProcess.php">
<center>
<h2> Add A Department! </h2>
<div class = "box">
	<table>
	<tr>
		<td>Department ID</td>
		<td><input type = "text" name = "deptID" id = "deptID"/></td>
	</tr>
	<tr>
		<td>Department Name</td>
		<td><input type = "text" name = "deptName" id = "deptName"/></td>
	</tr>
	<tr>
		<td>Department Chair</td>
		<td><input name = "chair" id = "chair" type="text"/></td>
	</tr>
	<tr>
		<td>Department Dean</td>
		<td><input type = "text" name = "dean" id = "dean"/></td>
	</tr>
	<tr>
		<td>Assign A Budget</td>
		<td><input type = "number" name = "budget" id = "budget" min = "10000" max = "100000" step = "1000"/></td>
	</tr>
	<tr>
		<td>Create Department</td>
		<td><input type = "submit" name = "Submit" id = "Submit"></td>
	</tr>
	</table>
	</div>
</center>
</form>
</body>
</html>