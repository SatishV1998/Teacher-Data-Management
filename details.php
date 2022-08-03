<?php
ob_start();
if(isset($_POST['email'])){
	include 'connection.php';
	$email=$_POST['email'];
	$sql1 = "select * from teachersdetails WHERE email='$email'";  
    $result1 = mysqli_query($con, $sql1);
	$sql2 = "select * from acadamics WHERE email='$email'";  
    $result2 = mysqli_query($con, $sql2);
	$sql3 = "select * from achievement WHERE email='$email'";  
    $result3 = mysqli_query($con, $sql3);
	$sql4 = "select * from publications WHERE email='$email'";  
    $result4 = mysqli_query($con, $sql4);
	
	$teachersdetails = mysqli_fetch_array($result1);
	$acadamics = mysqli_fetch_array($result2);
	$achievement = mysqli_fetch_array($result3);
	$publication = mysqli_fetch_array($result4);
	
	}
	
	
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $teachersdetails['name'];?> Details</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/details.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="javascript/modification.js"></script>
</head>

<body>
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
          <a class="navbar-brand" href="https://www.nitk.ac.in/" style="font-weight: bold; font-size: 2em; letter-spacing: 5px;">NITK</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
			<li><<img src="upload/<?php echo $teachersdetails['image']; ?>" alt="Profile Picture" width="50" height="50">></li>
            <li style="font-weight: bold; font-size: 2em; color: #f0f2f5"><?php echo $teachersdetails['name']; ?></li> 
        </ul>
        </div>
    </nav>

	<div class="showDetails">
			<h4>Personal Details: </h4>
			<table class="table table-hover">
				<tr>
					<th colspan=2>Details</th>
				</tr>
				<tr>
					<td>Name</td>
					<td id="name" style="display: block"><?php echo $teachersdetails['name'];?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td id="email" style="display: block"><?php echo $teachersdetails['email']?></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td id="phone" style="display: block"><?php echo $teachersdetails['phone']?></td>
				</tr>
				<tr>
					<td>Experience</td>
					<td id="experience" style="display: block"><?php echo $teachersdetails['experience']?> Years</td>
				</tr>
				<tr>
					<td>Depertment</td>
					<td id="depertment" style="display: block"><?php echo ucwords($teachersdetails['depertment'])?></td>
				</tr>
				<tr>
					<td>Position</td>
					<td id="position" style="display: block"><?php echo $teachersdetails['position']?></td>
				</tr>
				<tr>
					<td>Qualification</td>
					<td id="qualification" style="display: block"><?php echo $teachersdetails['qualification']?></td>
				</tr>
				<tr>
					<td>Area of Interest</td>
					<td id="interest" style="display: block"><?php echo $teachersdetails['interest']?></td>
				 </tr>
			</table>
	</div>
	
	<div class="showPublications">
	<?php
		include 'connection.php';
		$sql="select * from publications where email='$email'";
		$result = mysqli_query($con, $sql);    
        $count = mysqli_num_rows($result);  
		if($count>0){
			?>
			<h4>Significant Publications: </h4>
			<table class="table table-hover">
				<tr>
					<th>Serial No.</th>
					<th>Publication Details</th>
				</tr>
			<?php
			for($i=1;$row = mysqli_fetch_array($result, MYSQLI_ASSOC);$i++){
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['details']."</br>".$row['link']; ?></td>
				</tr>
				<?php
			}
			?>
			</table>
			<?php
		}
		else{
			?>
			<p>No publications details added yet.</p>
			<?php
		}
		mysqli_close($con);
	?>
	</div>
	
	<div class="showAcadamics">
	<?php
		include 'connection.php';
		$sql="select * from acadamics where email='$email'";
		$result = mysqli_query($con, $sql);    
        $count = mysqli_num_rows($result);  
		if($count>0){
			?>
			<h4>Acadamics: </h4>
			<table class="table table-hover">
				<tr>
					<th>Serial No.</th>
					<th>Acadamic Details</th>
				</tr>
			<?php
			for($i=1;$row = mysqli_fetch_array($result, MYSQLI_ASSOC);$i++){
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['details']; ?></td>
				</tr>
				<?php
			}
			?>
			</table>
			<?php
		}
		else{
			?>
			<p>No Acadamic details added yet.</p>
			<?php
		}
		mysqli_close($con);
	
	?>
	</div>
	
	<div class="showAchievements">
	<?php
		include 'connection.php';
		$sql="select * from achievement where email='$email'";
		$result = mysqli_query($con, $sql);   
        $count = mysqli_num_rows($result);  
		if($count>0){
			?>
			<h4>Achievements: </h4>
			<table class="table table-hover">
				<tr>
					<th>Serial No.</th>
					<th>Achievement Details</th>
				</tr>
			<?php
			for($i=1;$row = mysqli_fetch_array($result, MYSQLI_ASSOC);$i++){
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['details']; ?></td>
				</tr>
				<?php
			}
			?>
			</table>
			<?php
		}
		else{
			?>
			<p>No Achievement details added yet.</p>
			<?php
		}
		mysqli_close($con);
		
	?>
	</div>
	
	  
	  
	
    <a href="index.php"></a>


	
</body>


</html>