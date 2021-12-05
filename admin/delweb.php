<?php

include "../config.php"; // Using database connection file here

$pname = $_GET['pname']; // get id through query string

$del = mysqli_query($con,"delete from web where pname = '$pname'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>