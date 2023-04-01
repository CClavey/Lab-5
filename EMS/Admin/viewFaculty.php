<html>
<?php include("adminHeader.php"); ?>
<?php include("adminMenu.php"); ?>


<?php 
	include("dbConnection.php"); 
?>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel = "styleSheet" href = "CSS/adminStyles.css">

<body>
<?php
$sql2 = "SELECT * FROM department_tab";
$result2 = $connect->query($sql2);
?>
<form name="viewform" method="POST" action="viewFacultyProcess.php">
	<table align = "center">
	<tr>
	<td>
		<select name = "deptName">
		<center>
		<?php
		while($row2 = $result2->fetch_assoc())
		{
			?>
		  <option value="<?php echo $row2['deptName'];?>"><?php echo $row2['deptName'];?></option>
		  <?php
		}
		?>
		</select>
	</td>
	<td>
		<button name = "submit" type = "submit">View Faculty</button>
	</td>
	</center>
	</tr>
	</table>
</form>
</body>
</html>