<html>
<?php include("dbConnection.php"); ?>
<script src = "JS/scripts.js">
</script>
<link rel = "styleSheet" href = "CSS/studentStyles.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="CSS/flexSlides.css">
<link rel="stylesheet" href="CSS/font-awesome.min.css">
<link rel="stylesheet" href="CSS/style.css">
<body>
<body bgcolor="#75bed9;">
	<ul style="background-color:#03c6fc;">
		<li class="menu-item"><a href="#" class="drp">Account</a>
		<div class="menu-content">
			<a href="studentIndex.php">View Account Details</a><br>
			<a href="viewFaculty.php">View Department Faculty</a><br>
		</div>
		</li>
		
		
		<li class="menu-item"><a href="#" class="drp">Courses</a>	
		<div class="menu-content">
			<a href="viewCourses.php">View Related Courses</a><br>
			<a href="register.php">Register for a Course</a><br>
		</div>
		</li>
		
		<li class="menu-item"><a href="logout.php" class="drp"><button name = "logout">Logout</button></a>	
		</li>
	</ul>
</body>
</html>