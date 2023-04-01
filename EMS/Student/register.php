<html>
<?php include("studentHeader.php"); ?>
<?php include("studentMenu.php"); ?>

<!-- Save the hidden text box values as POST variables then run a loop on all the new variables to see what their values are and the ones with good values move on -->
<?php 
	include("dbConnection.php"); 
?>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="flexSlides.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel = "styleSheet" href = "CSS/studentStyles.css">
	<script src = "JS/studentScript.js"></script>

<head>
</head>

<body>
<?php
$sql1 = "SELECT courses_tab.*, faculty_tab.facName FROM courses_tab JOIN faculty_tab ON courses_tab.facID = faculty_tab.facID";
$result1=$connect->query($sql1);
echo "<center>";
echo "<table>";
$total = 1;
while($row1 = $result1->fetch_assoc())
	{
		$sql2="SELECT * FROM faculty_tab WHERE facID = '$row1[facID]'";
		$result2=$connect->query($sql2); 
		$row2 = $result2->fetch_assoc();
		$courseName = 'courseName' . $total;
		$courseID = 'courseID' . $total;
		$offeredIn = 'offeredIn' . $total;
		$Credits = 'Credits' . $total;
		$preReq = 'preReq' . $total;
		$type = 'type' . $total;
		$facName = 'facName' . $total;
		$$courseName = $row1['courseName'];
		$$courseID = $row1['courseID'];
		$$offeredIn = $row1['offeredIn'];
		$$Credits = $row1['Credits'];
		$$preReq = $row1['preReq'];
		$$type = $row1['type'];
		$$facName = $row1['facName'];
?>
		<tr>
			<td> 
				<div class="box"> Course Name: <?php echo ${$courseName}; ?><br>
					Course ID: <?php echo ${$courseID}; ?>
				</div>
			</td>
			<td> 
				<div class="box"> Offered: <?php echo ${$offeredIn}; ?> <br>
				Credits:  <?php echo ${$Credits}; ?>
				</div>
			</td>
			<td>
				<div class = "box"><form action="registerProcess.php" method="POST">
				<input type="hidden" name="courseID" value="<?php echo ${$courseID}; ?>">
				<button type = "submit" name = "register">Register Now!</button>
				</form><div> 
			</td>
		</tr>
		<tr>
			<td>
				<div class="box"> Pre-Requisites: <?php echo ${$preReq}; ?> <br>
				Department: <?php echo ${$type}; ?></div>
			</td>
			<td>
				<div class="box"> Professor: <?php echo ${$facName}; ?> </div>
			</td>
		</tr>
<?php 	$total++;
	} 
?>
</table>
</center>
</body>
</html>
