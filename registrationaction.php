<?php 
    include 'connection.php';
    //echo "Successfully Connected";

    $joining=$_POST['joining'];
    $name=$_POST['name'];
    $experience=$_POST['experience'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $linkedin=$_POST['linkedin'];
	$depertment=strtolower($_POST['depertment']);
    $interest=$_POST['interest'];
    $qualification=$_POST['qualification'];
    $position=$_POST['position'];
	$image='default/default.jpg';
    

    $sql = "INSERT INTO `teachersdetails`.`teachersdetails` ( `name`, `joining`, 
    `experience`,`email`, `password`, `phone`, `linkedin`,`depertment`, `interest`,`qualification`,`position`,`image`,`date`) VALUES ('$name', 
    '$joining','$experience','$email','$password', '$phone','$linkedin','$depertment', '$interest','$qualification', '$position','$image',
    current_timestamp());";

    //echo $sql;

    if($con->query($sql)==true){
       // echo "Successfully inserted";
       $confirm=true;
        // echo"<script>alert('Thank you, Your details have been submited successfuly..');</script>";
        header('location: index.php');
    }
    else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
?>
