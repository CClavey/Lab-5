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
$department = $_POST['deptName'];
$sql2 = "SELECT * FROM faculty_tab WHERE department = '$department'";
$result2 = $connect->query($sql2);
echo "<center>";
echo "<table>";
while($row2 = $result2->fetch_assoc())
	{
?>
	<tr>
		<td> 
			<div class="box"> Name: <?php echo $row2['facName']; ?>
			</div>
		</td>
		<td> 
			<div class="box"> Department: <?php echo $row2['department']; ?> <br>
			Join Date:  <?php echo $row2['DOJ']; ?></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="box"> Qualifications: <?php echo $row2['qualification']; ?> <br>
			</div>
		</td>
	</tr>
<?php } ?>
</table>
</center>
</body>
</html>