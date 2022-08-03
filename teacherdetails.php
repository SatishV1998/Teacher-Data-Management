<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teachers Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/teachersdetails.css">
</head>
<body>


<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="https://www.nitk.ac.in/" style="font-weight: bold; font-size: 2em; letter-spacing: 5px;">NITK</a>
          </div>
         
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" style="font-weight: bold; font-size: 1.5em;"><span class="glyphicon glyphicon-home"></span> Home</a></li> 
        </ul>
        </div>
      </nav>

<div class="container">
         
  <table class="table table-hover">
      <tr>
        <th>Sno</th>
		<th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Depertment</th>
        <th>Details</th>
      </tr>
    <?php
	include 'connection.php'; 

   $sql = "select * from teachersdetails ORDER BY depertment";  
   $result = mysqli_query($con, $sql);  
  
    
   for($i=1; $row = mysqli_fetch_array($result); $i++){ ?>

    <tr>

        <td><b><?php echo $i; ?></b></td>
		<td><img src="upload/<?php echo $row['image']; ?>" alt="Profile Picture" width="50" height="50"></td>
        <td><b><?php echo $row['name']?></b></td>
        <td><?php echo $row['email']?></td>
        <td><b><?php echo ucwords($row['depertment']);?></b></td>
		<form method="post" action="details.php">
			<td>
				<input type="hidden" name="email" value="<?php echo $row['email']?>">
				<button  name="more" class="btn btn-info btn-sm">
				<span class="glyphicon glyphicon-plus"></span> More
				</button>
			</td>
		</form>
      </tr>
<?php
   }
   
?>
      
   
  </table>
</div>

</body>
</html>

    


