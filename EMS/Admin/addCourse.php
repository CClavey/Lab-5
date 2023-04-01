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
$sql1 = "SELECT * FROM faculty_tab";
?>
<form name = "addCourseForm" method = "POST" action = "addCourseProcess.php">
<center>
<h2> Add A Course! </h2>
<div class = "box">
	<table>
	<tr>
		<td>Course ID</td>
		<td><input type = "text" name = "courseID" id = "courseID"/></td>
	</tr>
	<tr>
		<td>Course Name</td>
		<td><input type = "text" name = "courseName" id = "courseName"/></td>
	</tr>
	<tr>
		<td>Professor ID</td>
		<td><input type = "text" name = "facID" id = "facID"></td>
	</tr>
	<tr>
		<td>Semester</td>
		<td><input type = "text" name = "semester" id = "semester"/></td>
	</tr>
	<tr>
		<td>Credits</td>
		<td><input type = "number" name = "credits" id = "credits" min = "1" max = "4" step = "1"/></td>
	</tr>
		<tr>
		<td>Prerequisites</td>
		<td><input type = "textarea" name = "preReq" id = "preReq"/></td>
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
		<td>Create Course</td>
		<td><input type = "submit" name = "Submit" id = "Submit"></td>
	</tr>
	</table>
	</div>
</center>
</form>
</body>
</html>