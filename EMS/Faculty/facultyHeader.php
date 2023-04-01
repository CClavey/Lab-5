<html>
<head>
<?php 
	session_start(); 
	$userID = $_SESSION['userID'];
?>

<link rel = "styleSheet" href = "CSS/studentStyles.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="CSS/flexSlides.css">
<link rel="stylesheet" href="CSS/font-awesome.min.css">
<link rel="stylesheet" href="CSS/style.css">
<header>
	<center>
		<td><h2>Welcome Back <?php echo $userID; ?> </h2></td>
	</center>
</header>
</head>
</html>