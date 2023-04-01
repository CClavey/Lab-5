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
<form name = "addFacultyForm" method = "POST" action = "addFacultyProcess.php">
<center>
<h2> Add A Faculty Member! </h2>
<div class = "box">
	<table>
	<tr>
		<td>User ID</td>
		<td><input type = "text" name = "facID" id = "facID"/></td>
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
		<td>Join Date</td>
		<td><input name = "join" id = "join" type="date"/></td>
	</tr>
	<tr>
		<td>Department</td>
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
		<td>Qualifications</td>
		<td><input type = "textarea" name = "qual" id = "qual"/></td>
	</tr>
	<tr>
		<td>Create Faculty Member</td>
		<td><input type = "submit" name = "Submit" id = "Submit"></td>
	</tr>
	</table>
	</div>
</center>
</form>
</body>
</html>