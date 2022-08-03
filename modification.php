<?php
session_start();
ob_start();
if(isset($_SESSION['email'])){
	
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['name']; ?> Modeification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/modification.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="javascript/Modification.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="https://www.nitk.ac.in/" style="font-weight: bold; font-size: 2em; letter-spacing: 5px;">NITK</a>
          </div>
			
			<ul class="nav navbar-nav navbar-left">
			<li><input class="menu" type="button" value="Change Password" onclick = "changePasswordOpenForm()" id="changePasswordButton" style="display: block"></li>
			 <li> <input class="menu" type="button" value="Change Profile Image" onclick = "changeImageOpenForm()" id="changeImageButton" style="display: block"></li>
			 <li> <input class="menu" type="button" value="Add Publications" onclick = "addPublicationOpenForm()" id="addPublicationButton" style="display: block"></li>
			  <li><input class="menu" type="button" value="Add Acadamic" onclick = "addAcadamicOpenForm()" id="addAcadamicButton" style="display: block"></li>
			 <li> <input class="menu" type="button" value="Add Achievement" onclick = "addAchievementOpenForm()" id="addAchievementButton" style="display: block"></li>
			</ul>
          <ul class="nav navbar-nav navbar-right">
			
			<li><img src="upload/<?php echo $_SESSION['image']; ?>" alt="Profile Picture" width="50" height="50"></li>
            <li><a href="logout.php" style="font-weight: bold; font-size: 1.5em;"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li> 
        </ul>
        </div>
      </nav>
 

	  <div class="changePassword">
	  <form  id="changePassword" method="post" action="modification.php" style="display: none" >
	  <h3>Enter Old Password</h3>
      <input class="normal" type="password" name="oldPassword" id="oldPassword" placeholder="Enter your Old password" required><br>
	  <h3>Enter New Password</h3>
      <input class="normal" type="password" name="newPassword" id="newPassword" placeholder="Enter your New password" required><br>
	  <h3>Confirm New Password</h3>
      <input class="normal" type="password" name="confirmNewPassword" id="confirmNewPassword" placeholder="Confirm Your New password" required><br>
		
	  <button class="btn bt" onclick = "changePasswordCloseForm()" name="changePasswordSubmit">Submit</button>
	  </form>
	  </div>

	
	<div class="changeImage">
	<form  id= "changeImage" method="post" action="modification.php"  style="display: none" enctype="multipart/form-data">
	  <h3>Set image</h3>
      <input type="file" name="image" id="image" placeholder="Enter your image" required><br>
	  <button class="btn bt" onclick = "changeImageCloseForm()" name="changeImageSubmit">Submit</button>
	</form>
	</div>
	
	
	  <div class="addPublication">
	  <form  id="addPublication" method="post" action="modification.php"  style="display: none" >
	  <h3>Enter Publication Details</h3>
      <input class="publication" type="text" name="publicationDetails" id="publicationDetails" placeholder="Enter publication Details" required><br>
	  <h3>Enter Link associated to the publication</h3>
      <input class="normal" type="text" name="publicationLinks" id="publicationLinks" placeholder="Enter Link"><br>
	  
	  <button class="btn bt" onclick = "addPublicationCloseForm()" name="addPublicationSubmit">Submit</button>
	  </form>
	  </div>
	  
	  <div class="addAcadamic">
	  <form  id="addAcadamic" method="post" action="modification.php"  style="display: none" >
	  <h3>Enter Acadamic Background</h3>
      <input class="normal" type="text" name="acadamicDetails" id="acadamicDetails" placeholder="Enter Acadamic Details" required><br>
	  
	  <button class="btn bt" onclick = "addAcadamicCloseForm()" name="addAcadamicSubmit">Submit</button>
	  </form>
	  </div>
	  
	  <div class="addAchievement">
	  <form  id="addAchievement" method="post" action="modification.php"  style="display: none" >
	  <h3>Enter Achievement</h3>
      <input class="normal" type="text" name="achievementDetails" id="achievementDetails" placeholder="Enter Achievement Details" required><br>
	  <button class="btn bt" onclick = "addAchievementCloseForm()" name="addAchievementSubmit">Submit</button>
	  </form>
	  </div>
	  
	
	
	<div class="editDetails">
	<?php
		include 'connection.php';
		$email=$_SESSION['email'];
		$sql="select * from teachersdetails where email='$email'";
		$result = mysqli_query($con, $sql);    
        $count = mysqli_num_rows($result);  
		if($count>0){
			?>
			<h4>Personal Details: </h4>
			<table class="table table-hover">
				<tr>
					<th colspan=5>Details</th>
				</tr>
			<?php
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC)
				?>
				<tr>
					<td>Name</td>
					<form method="post" action="modification.php">
						<td id="name" style="display: block"><?php echo $row['name']?></td>
						<td>
							  <input type="hidden" name="table" value="teachersdetails">
							  <input type="text" id="nameUpdate" name="name" value="<?php echo $row['name']; ?>" style="display: none">  
						</td>
						<td style="width:80px"><button class="btn"  id="nameUpdateButton" onclick="nameUpdateCloseForm()" name="updateButton" style="display: none" >Update</button></td>
					</form>
						<td style="width:80px">
							<button class="btn" id="nameEdit" onclick="nameUpdateOpenForm()" style="display: block">Edit</button>
							
						</td>
				</tr>
				<tr>
					<td>Email</td>
					<form method="post" action="modification.php">
						<td id="email" style="display: block"><?php echo $row['email']?></td>
						<td>
							  <input type="hidden" name="table" value="teachersdetails">
							  <input type="text" id="emailUpdate" name="email" value="<?php echo $row['email']?>" style="display: none">  
						</td>
						<td style="width:80px"><button class="btn" id="emailUpdateButton" onclick="emailUpdateCloseForm()" name="updateButton" style="display: none" >Update</button></td>
					</form>
						<td style="width:80px">
							<button class="btn" id="emailEdit" onclick="emailUpdateOpenForm()" style="display: block">Edit</button>
							
						</td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<form method="post" action="modification.php">
						<td id="phone" style="display: block"><?php echo $row['phone']?></td>
						<td>
							  <input type="hidden" name="table" value="teachersdetails">
							  <input type="text" id="phoneUpdate" name="phone" value="<?php echo $row['phone']?>" style="display: none">  
						</td>
						<td style="width:80px"><button class="btn" id="phoneUpdateButton" onclick="phoneUpdateCloseForm()" name="updateButton" style="display: none" >Update</button></td>
					</form>
						<td style="width:80px">
							<button class="btn" id="phoneEdit" onclick="phoneUpdateOpenForm()" style="display: block">Edit</button>
							
						</td>
				</tr>
				<tr>
					<td>Experience</td>
					<form method="post" action="modification.php">
						<td id="experience" style="display: block"><?php echo $row['experience']?></td>
						<td>
							  <input type="hidden" name="table" value="teachersdetails">
							  <input type="text" id="experienceUpdate" name="experience" value="<?php echo $row['experience']?>" style="display: none">  
						</td>
						<td style="width:80px"><button class="btn" id="experienceUpdateButton" onclick="experienceUpdateCloseForm()" name="updateButton" style="display: none" >Update</button></td>
					</form>
						<td style="width:80px">
							<button class="btn" id="experienceEdit" onclick="experienceUpdateOpenForm()" style="display: block">Edit</button>
							
						</td>
				</tr>
				<tr>
					<td>Depertment</td>
					<form method="post" action="modification.php">
						<td id="depertment" style="display: block"><?php echo ucwords($row['depertment'])?></td>
						<td>
							  <input type="hidden" name="table" value="teachersdetails">
							  <input type="text" id="depertmentUpdate" name="depertment" value="<?php echo ucwords($row['depertment'])?>" style="display: none">  
						</td>
						<td style="width:80px"><button class="btn" id="depertmentUpdateButton" onclick="depertmentUpdateCloseForm()" name="updateButton" style="display: none" >Update</button></td>
					</form>
						<td style="width:80px">
							<button class="btn" id="depertmentEdit" onclick="depertmentUpdateOpenForm()" style="display: block">Edit</button>
							
						</td>
				</tr>
				<tr>
					<td>Position</td>
					<form method="post" action="modification.php">
						<td id="position" style="display: block"><?php echo $row['position']?></td>
						<td>
							  <input type="hidden" name="table" value="teachersdetails">
							  <input type="text" id="positionUpdate" name="position" value="<?php echo $row['position']?>" style="display: none">  
						</td>
						<td style="width:80px"><button class="btn" id="positionUpdateButton" onclick="positionUpdateCloseForm()" name="updateButton" style="display: none" >Update</button></td>
					</form>
						<td style="width:80px">
							<button class="btn" id="positionEdit" onclick="positionUpdateOpenForm()" style="display: block">Edit</button>
							
						</td>
				</tr>
				<tr>
					<td>Qualification</td>
					<form method="post" action="modification.php">
						<td id="qualification" style="display: block"><?php echo $row['qualification']?></td>
						<td>
							  <input type="hidden" name="table" value="teachersdetails">
							  <input type="text" id="qualificationUpdate" name="qualification" value="<?php echo $row['qualification']?>" style="display: none">  
						</td>
						<td style="width:80px"><button class="btn" id="qualificationUpdateButton" onclick="qualificationUpdateCloseForm()" name="updateButton" style="display: none" >Update</button></td>
					</form>
						<td style="width:80px">
							<button class="btn" id="qualificationEdit" onclick="qualificationUpdateOpenForm()" style="display: block">Edit</button>
							
						</td>
				</tr>
				<tr>
					<td>Area of Interest</td>
					<form method="post" action="modification.php">
						<td id="interest" style="display: block"><?php echo $row['interest']?></td>
						<td>
							  <input type="hidden" name="table" value="teachersdetails">
							  <input type="text" id="interestUpdate" name="interest" value="<?php echo $row['interest']?>" style="display: none">  
						</td>
						<td style="width:80px"><button class="btn" id="interestUpdateButton" onclick="interestUpdateCloseForm()" name="updateButton" style="display: none" >Update</button></td>
					</form>
						<td style="width:80px">
							<button class="btn" id="interestEdit" onclick="interestUpdateOpenForm()" style="display: block">Edit</button>
							
						</td>
				 </tr>
			</table>
			<?php
		}
		else{
			?>
			<p>No Details added yet.</p>
			<?php
		}
		mysqli_close($con);
	
	?>
	</div>
	
	<div class="showPublications">
	<?php
		include 'connection.php';
		$email=$_SESSION['email'];
		$sql="select * from publications where email='$email'";
		$result = mysqli_query($con, $sql);    
        $count = mysqli_num_rows($result);  
		if($count>0){
			?>
			<h4>Significant Publications: </h4>
			<table class="table" >
				<tr>
					<th>Serial No.</th>
					<th colspan=2>Publication Details</th>
				</tr>
			<?php
			for($i=1;$row = mysqli_fetch_array($result, MYSQLI_ASSOC);$i++){
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['details']."</br>".$row['link']; ?></td>
					<td style="width:80px">
						<form method="post" action="modification.php">
						  <input type="hidden" name="table" value="publications">
						  <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
						  <button class="btn" name="deleteSubmit">Delete</button>
						</form>
					</td>
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
		$email=$_SESSION['email'];
		$sql="select * from acadamics where email='$email'";
		$result = mysqli_query($con, $sql);    
        $count = mysqli_num_rows($result);  
		if($count>0){
			?>
			<h4>Acadamics: </h4>
			<table class="table" >
				<tr>
					<th>Serial No.</th>
					<th colspan=2>Acadamic Details</th>
				</tr>
			<?php
			for($i=1;$row = mysqli_fetch_array($result, MYSQLI_ASSOC);$i++){
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['details']; ?></td>
					<td style="width:80px">
						<form method="post" action="modification.php">
						  <input type="hidden" name="table" value="acadamics">
						  <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
						  <button class="btn" name="deleteSubmit">Delete</button>
						</form>
					</td>
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
		$email=$_SESSION['email'];
		$sql="select * from achievement where email='$email'";
		$result = mysqli_query($con, $sql);   
        $count = mysqli_num_rows($result);  
		if($count>0){
			?>
			<h4>Achievements: </h4>
			<table class="table" >
				<tr>
					<th>Serial No.</th>
					<th colspan=2>Achievement Details</th>
				</tr>
			<?php
			for($i=1;$row = mysqli_fetch_array($result, MYSQLI_ASSOC);$i++){
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['details']; ?></td>
					<td style="width:80px">
						<form method="post" action="modification.php">
						  <input type="hidden" name="table" value="achievement">
						  <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
						  <button class="btn" name="deleteSubmit">Delete</button>
						</form>
					</td> 
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

<?php

	if(isset($_POST["changePasswordSubmit"])){
		include 'connection.php';
		$email=$_SESSION['email'];
		$oldPassword=$_POST['oldPassword'];
		$newPassword= $_POST['newPassword'];
		$confirmNewPassword=$_POST['confirmNewPassword'];
		if( $oldPassword != $_SESSION['password'] ){
			echo '<script>alert("Given Old password is Wrong. \n Try again.");';
			echo 'window.location= "modification.php";</script>';
		}
		if($newPassword!=$confirmNewPassword){
			echo '<script>alert("Password confirmation failed.\n Please try again.");';
			echo 'window.location= "modification.php";</script>';
		}
		$sql = "UPDATE teachersdetails SET password='$newPassword' WHERE email='$email' ";

		if (mysqli_query($con, $sql)) {
			$_SESSION['password']=$newPassword;
			echo '<script>alert("Password Change Succesfull.");';
			echo 'window.location= "modification.php";</script>';
		} else {
		  echo "Error updating record: " . mysqli_error($con);
		}

		mysqli_close($con);
	}
	
	if(isset($_POST["changeImageSubmit"])){
		include 'connection.php';
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["changeImageSubmit"])) {
		  $check = getimagesize($_FILES["image"]["tmp_name"]);
		  if($check !== false) {
			$uploadOk = 1;
		  } else {
			echo '<script>alert("File is not an image.");';
			echo 'window.location= "modification.php";</script>';
			$uploadOk = 0;
		  }
		}

		// Check file size
		if ($_FILES["image"]["size"] > 5000000) {
			echo '<script>alert("Image size is too large.\nTry under 5MB");';
			echo 'window.location= "modification.php";</script>';
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");';
			echo 'window.location= "modification.php";</script>';
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo '<script>alert("Sorry, your image was not uploaded.");';
			echo 'window.location= "modification.php";</script>';
		  
		// if everything is ok, try to upload file
		} else {
			$email=$_SESSION['email'];
			$image=$_FILES["image"]["name"];
			$sql = "UPDATE teachersdetails SET image='$image' WHERE email='$email' ";
		  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) && mysqli_query($con, $sql)) {
				$_SESSION['image']=$image;
				header("Refresh:0");
		  } else {
				echo '<script>alert("Sorry, there was an error uploading your Image.\nTry again.");';
				echo 'window.location= "modification.php";</script>';
		  }
		}
		mysqli_close($con);
	}
	
	if(isset($_POST['addPublicationSubmit'])){
		include 'connection.php';
		$details=$_POST['publicationDetails'];
		$link=$_POST['publicationLinks'];
		$email=$_SESSION['email'];
		
		$sql = "INSERT INTO `teachersdetails`.`publications` ( `email`, `details`, `link`) VALUES ('$email','$details','$link');";
		if($con->query($sql)==TRUE) {
			header("Refresh:0");
			} 
		else {
			echo '<script>alert("Something Error.\n Try again."); window.location= "modification.php";</script>';
			}
		mysqli_close($con);
	}
	if(isset($_POST['addAcadamicSubmit'])){
		include 'connection.php';
		$details=$_POST['acadamicDetails'];
		$email=$_SESSION['email'];
		$sql = "INSERT INTO `teachersdetails`.`acadamics` ( `email`, `details`) VALUES ('$email','$details');";
		if($con->query($sql)==TRUE) {
			header("Refresh:0");
			} 
		else {
			echo '<script>alert("Something Error.\n Try again."); window.location= "modification.php";</script>';
			}
		mysqli_close($con);
	}
	if(isset($_POST['addAchievementSubmit'])){
		include 'connection.php';
		$details=$_POST['achievementDetails'];
		$email=$_SESSION['email'];
		$sql = "INSERT INTO `teachersdetails`.`achievement` ( `email`, `details`) VALUES ('$email','$details');";
		if($con->query($sql)==TRUE) {
			header("Refresh:0");
			} 
		else {
			echo '<script>alert("Something Error.\n Try again."); window.location= "modification.php";</script>';
			}
		mysqli_close($con);
	}
	
	if(isset($_POST['deleteSubmit'])){
		include 'connection.php';
		$table=$_POST['table'];
		$id=$_POST['id'];
		$sql = "DELETE FROM `teachersdetails`.`$table` WHERE `ID`='$id'";
		if (mysqli_query($con, $sql)){
			header("Refresh:0");
		}
		else{
			echo "Error deleting record: " . mysqli_error($con);
		}
		
		mysqli_close($con);
	}
	
	if(isset($_POST['updateButton'])){
		include 'connection.php';
		$email=$_SESSION['email'];
		if(isset($_POST['name'])){
			$name=$_POST['name'];
			$sql = "UPDATE teachersdetails SET name='$name' WHERE email='$email' ";
		}
		if(isset($_POST['email'])){
			$temp=$_POST['email'];
			$sql = "UPDATE teachersdetails SET email='$temp' WHERE email='$email' ";
			$_SESSION['email']=$temp;
		}
		if(isset($_POST['phone'])){
			$name=$_POST['phone'];
			$sql = "UPDATE teachersdetails SET phone='$name' WHERE email='$email' ";
		}
		if(isset($_POST['experience'])){
			$name=$_POST['experience'];
			$sql = "UPDATE teachersdetails SET experience='$name' WHERE email='$email' ";
		}
		if(isset($_POST['depertment'])){
			$name=strtolower($_POST['depertment']);
			$sql = "UPDATE teachersdetails SET depertment='$name' WHERE email='$email' ";
		}
		if(isset($_POST['position'])){
			$name=$_POST['position'];
			$sql = "UPDATE teachersdetails SET position='$name' WHERE email='$email' ";
		}
		if(isset($_POST['qualification'])){
			$name=$_POST['qualification'];
			$sql = "UPDATE teachersdetails SET qualification='$name' WHERE email='$email' ";
		}
		if(isset($_POST['interest'])){
			$name=$_POST['interest'];
			$sql = "UPDATE teachersdetails SET interest='$name' WHERE email='$email' ";
		}
		if (mysqli_query($con, $sql)){
			header("Refresh:0");
		}
		else{
			echo "Error deleting record: " . mysqli_error($con);
		}
		mysqli_close($con);
	}

}

else{
	echo '<script>alert("Please log in.");';
	echo 'window.location= "login.php";</script>';
}
ob_end_flush();
?>
