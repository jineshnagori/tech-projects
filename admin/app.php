<?php
    include '../config.php';
    mysqli_select_db($con,'techprojects');

    $work = $_POST['post'];
    $pname = $_POST['pname'];
    $pdesc = $_POST['pdesc'];

    if (isset($work)) {
            echo "<pre>", print_r($_FILES['image']['name']),"</pre>";
            $imageName = $_FILES['image']['name'];
            $path = '../assets/images/upload/android/';
            if (!file_exists($path)) {
                mkdir($path, 0777,true);
            }
    } 
    $target = '../assets/images/upload/android/'. $imageName;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
            
    mysqli_query($con,"insert into app (pname, pdesc, images) values ('$pname','$pdesc','$imageName')") or die("failed to query database");
            
    echo '<script type ="text/javascript"> alert("Upload Successfully")</script>';
?>