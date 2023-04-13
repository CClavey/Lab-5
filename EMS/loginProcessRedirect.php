<html>
<head>
<?php 
session_start(); 
if($_POST['captcha'] != $_SESSION['digit']) 
{
	header('location: loginError.php');
	die("Sorry, the CAPTCHA code entered was incorrect!");
	session_destroy();
}
?>
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="CSS/flexSlides.css">
<link rel="stylesheet" href="CSS/font-awesome.min.css">
<link rel="stylesheet" href="CSS/style.css">
<script src="scripts.js"></script>
</head>

<body>
<center>

	<?php
		include("dbConnection.php");
		$userID = $_POST['userID'];
		$password = $_POST['password'];
		$role = $_POST['role'];

		$sql = "SELECT * FROM users_tab where userID='$userID' AND password='$password'"; 
		$result = $connect->query($sql);
		$row = $result->fetch_assoc(); 

			if($row['role']=='S')  //Students
			{
				$_SESSION['userID'] = $userID;
				$_SESSION['password'] = $password;
				$_SESSION['role'] = "S";
				header('location: /Week 6/EMS/Student/studentIndex.php');	 
			}
			else if($row['role']=='F')  //Faculty
			{
				$_SESSION['userID']=$userID;
				$_SESSION['password']=$password;
				$_SESSION['role'] = "F";
				header('location: /Week 6/EMS/Faculty/facultyIndex.php');
			}
		    else if($row['role']=='A')  //Admin
			{
				$_SESSION['userID']=$userID;
				$_SESSION['password']=$password;
				$_SESSION['role'] = "A";
				header('location: /Week 6/EMS/Admin/adminIndex.php');
			}	 
			else
			{
			   header('location: loginError.php');
			}
	?>

</center>
</body>
</html>
