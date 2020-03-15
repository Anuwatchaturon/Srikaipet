<?php
    require_once("../condb.php");
    if(isset($_POST['user'])){
        
        $q="SELECT * FROM `login` WHERE `username` = '".$_POST['user']."'";
        $r=mysqli_query($con, $q);
        if($r){
            if(mysqli_num_rows($r) > 0){
                echo'<p style="color:red">Not Use</p>';
            }else{
                echo'<pstyle="color:green">Can Use</p>';
            }
        }else{
            echo $q;
        }
    }

?>