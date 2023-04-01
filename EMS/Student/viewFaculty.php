<html>
<?php include("studentHeader.php"); ?>
<?php include("studentMenu.php"); ?>


<?php 
	$major = $_SESSION['major'];
	include("dbConnection.php"); 
?>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel = "styleSheet" href = "CSS/studentStyles.css">

<body>
<?php
$sql1="SELECT * FROM faculty_tab WHERE department = '$major'";
$result1=$connect->query($sql1);
echo "<center>";
echo "<table>";
while($row1 = $result1->fetch_assoc())
	{
?>
	<tr>
		<td> 
			<div class="box"> Name: <?php echo $row1['facName']; ?>
			</div>
		</td>
		<td> 
			<div class="box"> Department: <?php echo $row1['department']; ?> <br>
			Join Date:  <?php echo $row1['DOJ']; ?></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="box"> Qualification: <?php echo $row1['qualification']; ?></div>
		</td>
	</tr>
<?php } ?>
</table>
</center>
</body>
</html>