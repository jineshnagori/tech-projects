<?php

    session_start();

    include "config.php";

    $fname = $_POST['fname']; 

    $lname = $_POST['lname']; 

    $email = $_POST['email'];

    $joinus = $_POST['joinus'];

    $message = $_POST['message'];

    $q = "insert into contact(fname, lname, email, joinus, message) VALUES('$fname','$lname','$email','$joinus','$message')";
    $result = mysqli_query($con,$q);

    if(!$result){
        die('Error: ' . mysqli_error($con));
        echo '<script type ="text/javascript"> alert("Database is not connected");window.location= "index.php"</script>';
    }

    else {	
        echo '<script type ="text/javascript"> alert("Form Submitted...");window.location= "index.php"</script>';
    } 
?>