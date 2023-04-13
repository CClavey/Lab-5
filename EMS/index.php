<html>
<head>
	<title> Education Management System</title>
	<header>
		<center><h2>Cole's College</h2></center>
	</header>
	<?php include ("dbConnection.php") ?>
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<link rel="stylesheet" href="CSS/flexSlides.css">
	<link rel="stylesheet" href="CSS/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="CSS/indexStyles.css">
</head>
<body>
	<form name="login-form" method="POST" action="loginProcessRedirect.php" >
	<div class = "box">
		<table align="center">
			<tr>
				<td>Enter your User ID</td>
				<td><input type="text" id="userID" name="userID"></td>
			</tr>
			<tr>
				<td>Enter your Password</td>
				<td><input type="password" name="password" id="password" value = ""/></td>
			</tr>
			<tr>
				<td><p><img src="captcha.php" width="140" height="30" border="1" alt="CAPTCHA"></p></td>
				<td><p><input type="text" name="captcha" value=""><br>
				<small>Copy the digits from the image</small></p></td>
			<tr style="height:40px;">
				<td align="center">Login</td>
				<td align="center"><input type="submit" value="Login"></td>
			</tr>
		</table>
		</div>
	</form>

</body>

</html>
