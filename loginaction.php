<?php      
	session_start();
     include 'connection.php';  
      
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from teachersdetails where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){   
			
			$_SESSION["email"]=$username;
			$_SESSION["password"]=$password;
			$_SESSION["image"]=$row["image"] ;
			$_SESSION["name"]=$row["name"];
			header('location: modification.php');
        }  
        else{  
            echo "Login failed. Invalid username or password.";  
            header('location: register.php');
        }     
?>  
