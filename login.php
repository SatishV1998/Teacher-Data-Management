<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACULTY LOGIN</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
    
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="https://www.nitk.ac.in/" style="font-weight: bold; font-size: 2em; letter-spacing: 5px;">NITK</a>
          </div>
         
          <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php" style="font-weight: bold; font-size: 1.5em;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="index.php" style="font-weight: bold; font-size: 1.5em;"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          </ul>
        </div>
      </nav>


    <div class="container">
        <!-- <h1 style="text-align: center;font-size: 45px;">Welcome to NITK teacher registration portal</h3>   <br>    -->

        <form action="loginaction.php" method="post">
            
            <h3>Email id:</h3>
            <input type="email" name="email" id="email" placeholder="Enter you email id" required><br>

            <h3>Password</h3>
            <input type="password" name="password" id="password" placeholder="Enter your password" required><br>
            <a href="#"><p>Forgot password</p></a>

            <button class="button">Submit</button> 

        </form>
    </div>
    <script src="index.js"></script>
    <!-- //ALTER TABLE alumniportal AUTO_INCREMENT = 0;    -->
</body>

</html>

