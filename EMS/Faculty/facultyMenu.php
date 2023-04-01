<html>
<?php include("dbConnection.php"); ?>
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
			<a href="facultyIndex.php">View Account Details</a><br>
			<a href="taughtCourses.php">View Your Courses</a><br>
		</div>
		</li>
		
		
		<li class="menu-item"><a href="#" class="drp">Courses</a>	
		<div class="menu-content">
			<a href="viewAllCourses.php">View All Courses</a><br>
		</div>
		</li>
		
		<li class="menu-item"><a href="logout.php" class="drp"><button name = "logout">Logout</button></a>	
		</li>
	</ul>
</body>
</html>