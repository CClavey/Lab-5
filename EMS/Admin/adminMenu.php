<html>
<?php include("dbConnection.php"); ?>
<script src = "JS/scripts.js">
</script>
<link rel = "styleSheet" href = "CSS/adminStyles.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="CSS/flexSlides.css">
<link rel="stylesheet" href="CSS/font-awesome.min.css">
<link rel="stylesheet" href="CSS/style.css">
<body>
<body bgcolor="#75bed9;">
	<ul style="background-color:#03c6fc;">
		<li class="menu-item"><a href="#" class="drp">Students</a>
		<div class="menu-content">
			<a href="viewStudent.php">View Students</a><br>
			<a href="addStudent.php">Add A Student</a><br>
		</div>
		</li>
		
		
		<li class="menu-item"><a href="#" class="drp">Faculty</a>	
		<div class="menu-content">
			<a href="viewFaculty.php">View Faculty</a><br>
			<a href="addFaculty.php">Add Faculty Member</a><br>
		</div>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Other</a>	
		<div class="menu-content">
			<a href="addDepartment.php">Create Department</a><br>
			<a href="addCourse.php">Create Course</a><br>
		</div>
		</li>
		
		<li class="menu-item"><a href="logout.php" class="drp"><button name = "logout">Logout</button></a>	
		</li>
	</ul>
</body>
</html>