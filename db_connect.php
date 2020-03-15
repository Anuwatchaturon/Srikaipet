<?php

    $con =  mysqli_connect('127.0.0.1','root','');

    if(!$con)
    {
        echo 'Not connected To server';
    }
    if(!mysqli_select_db($con,'login_db'))
    {
        echo 'Database Not select';
    }

    $name = $_POST['name'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $time = $_POST['time'];
    $symptom = $_POST['symptom'];

    $sql = "INSERT INTO offsite (name,type,location,time,symptom) VALUES ('$name','$type','$location','$time','$symptom')";

    if(!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    header("refresh:0; url=rgt.php") ;

?>
