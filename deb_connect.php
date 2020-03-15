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
    $pett = $_POST['pett'];
    $type = $_POST['type'];
    $time = $_POST['time'];
    $number = $_POST['number'];


    $sql = "INSERT INTO tbl (name,pett,type,time,number) VALUES ('$name','$pett','$type','$time','$number')";

    if(!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    header("refresh:0; url=deposit.php") ;

?>
