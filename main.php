<?php
include('h.php');
?>
<?php session_start();  
include('condb.php');
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='member'){
    Header("Location: ../logout.php");  
  } 
?>

<style type="text/css">
#btn{
background-color: white
  border: none;
  color: black;
  padding: 4px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
#btn {
  background-color: white; 
  color: red; 
  border: 2px solid #f44336;
}
#btn:hover {
  background-color: #f44336;
  color: white;
}
</style>

<style type="text/css">
#btn2{
background-color: white
  border: none;
  color: #6495ED;
  padding: 5px 45px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
#btn2 {
  background-color: #6495ED; 
  color: white; 
  border: 2px solid #6495ED;
}
#btn2:hover {
  background-color: white;
  color: #6495ED;
}


</style>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

<form action="logout.php">
	<div class="form-group">
      <div class="col-sm-12"align="right">
			<h3> User : <?php echo $name; ?>  </h3><input type="submit" value="Logout"  id="btn" >
		</div>
	</div>

</form>

<?php session_start();  
include('condb.php'); 
  $name =  $row["name"];
  $pet =  $row["pet"];
  echo  "<div class='col-sm-12' align='center'> <h2> คิวการรักษา </h2> <br> </div>";
  $qe = "SELECT * FROM quene" or die("Error:" . mysqli_error());
  $re = mysqli_query($con, $qe); 
  while($row = mysqli_fetch_array($re)) { 
    $id =  $row["id"];
    $name =  $row["name"];
    $pet =  $row["pet"];
    $date =  $row["date"];
    $qtype =  $row["qtype"];
    echo  "<div class='col-sm-12' align='center'> คิวที่ : $id ชื่อ :  $name สัตว์เลี้ยง : $pet วันที่ : $date ประเภทการจอง : $qtype  <br> </div> ";
  }
?>
  <div class="col-sm-12" align="center" style= "padding-top:75px">
  <a href="quene.php"><button id="btn2">จองคิว</button></a>
  </div>




</body>
</html>