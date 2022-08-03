<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACULTY REGISTRATION</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="javascript/registration.js"></script>
</head>
<body>
    
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="https://www.nitk.ac.in/" style="font-weight: bold; font-size: 2em; letter-spacing: 5px;">NITK</a>
          </div>
         
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php" style="font-weight: bold; font-size: 1.5em;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="index.php" style="font-weight: bold; font-size: 1.5em;"><span class="glyphicon glyphicon-home"></span> Home</a></li>  
        </ul>
        </div>
      </nav>


    
    <div class="container">
    

        <form action="registrationaction.php" method="post">
            <div class="user-details">
            <div class="input-box">
            <span class="details">Full name</span>
            <input type="text" name="name" id="name" placeholder="Enter your full name" required><br>
            </div>

            <div class="input-box">
                <span class="details">Date of joining</span>
                <input type="date" id="joining" name="joining" required><br>
                </div>

                <div class="input-box">
                    <span class="details">Year of experience</span>
                    <input type="text" name="experience" id="experience" placeholder="Enter your experience" required><br>
                    </div>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" id="email" placeholder="Enter your NITK email" required><br>
                    </div>

                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required><br>
                        </div>
						
                    <div class="input-box">
					<span class="details">Re-Enter Password</span>
					<input type="password" name="re-enter password" id="rpassword" placeholder="Enter your password again" required><br>
					</div>
					
                    <div class="input-box">
                        <span class="details">Phone no.</span>
                        <input type="phone" name="phone" id="phone" placeholder="Enter your phone number" required><br>
					</div>
					
                    <div class="input-box">
                        <span class="details">Linkedin URL.</span>
                        <input type="url" name="linkedin" id="linkedin" placeholder="Insert link of your linkedin account" required><br>
                        </div>

                    
                    <div class="input-box">
                            <span class="details">Depertment<span>
                                <input type="text" name="depertment" id="interest" placeholder="Enter your Depertment Name" required><br>
                    </div>

                    <div class="input-box">
                            <span class="details">Area of interest<span>
                                <input type="text" name="interest" id="interest" placeholder="Enter your area of interest" required><br>
                    </div>
            
            <div class="slt">
            <select name="qualification" id="qualification" required>
            <option >Select your qualification</option>    
            <option value="doctorate">DOCTORATE</option>
            <option value="post graduate">POST GRADUATE</option>
            <option value="graduate">GRADUATE</option>
            </select><br>
            </div>
            <br>
            <select name="position" id="position" required>
            <option >Select your position</option>    
            <option>Faculty</option>
            <option>Adjunct Faculty</option>
            <option>Adhoc Faculty</option>
            <option>Staff</option>
            <option>Project Staff</option>
            </select><br>
            <button class="btn" onclick="validateform(document.getElementById('phone').value,document.getElementById('email').value,document.getElementById('password').value,document.getElementById('rpassword').value)">Submit</button> 

        </form>
    </div>
</div>
    <script src="index.js"></script>
    <!-- //ALTER TABLE alumniportal AUTO_INCREMENT = 0;    -->
</body>

</html>

