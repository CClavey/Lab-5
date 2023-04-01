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
<form name = "addUserForm" method = "POST" action = "addStudentProcess.php">
<center>
<h2> Add A Student! </h2>
<div class = "box">
	<table>
	<tr>
		<td>User ID</td>
		<td><input type = "text" name = "stuID" id = "stuID"/></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type = "text" name = "name" id = "name"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type = "password" name = "pwd" id = "pwd"/></td>
	</tr>
	<tr>
		<td>Enroll Date</td>
		<td><input  name = "enroll" id = "enroll" type="number" min="2020" max="2025" step="1"/></td>
	</tr>
	<tr>
		<td>Major</td>
		<td><select name = "deptName">
		<center>
		<?php
		while($row2 = $result2->fetch_assoc())
		{
			?>
		  <option value="<?php echo $row2['deptName'];?>"><?php echo $row2['deptName'];?></option>
		  <?php
		}
		?>
		</select></td>
	</tr>
	<tr>
		<td>GPA</td>
		<td><input type = "number" name = "gpa" min = "0.0" max = "4.0" step = "0.1" value = "3.0" id = "gpa"/></td>
	</tr>
	<tr>
		<td>Graduation Date</td>
		<td><input name = "grad" id = "grad" type="number" min="2020" value = "2020" max="2030" step="1"/></td>
	</tr>
	<tr>
		<td>Create Student</td>
		<td><input type = "submit" name = "Submit" id = "Submit"></td>
	</tr>
	</table>
	</div>
</center>
</form>
</body>
</html>