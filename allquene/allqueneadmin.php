<?php
include('../h.php');
?>
<?php session_start();  
include('../condb.php');
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
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
  color:    black; 
  border: 1px solid #F0F8FF;
  opacity: 0.5;
}
#btn:hover {
  background-color: #f44336;
  color: white;
  opacity:1;
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

body{
    background:url(https://c.wallhere.com/photos/7c/28/trianglify-83486.png!d) no-repeat center center fixed;
   -webkit-background-size: cover;  
   -moz-background-size: cover;  
   -o-background-size: cover;  
   background-size: cover;
 }
</style>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="Assets/img/favicon.png" rel="icon">
  <link href="Assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="Assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="Assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="Assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="../admin.php"><span>Srikai Pet</span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
      <form action="logout.php">
	    <div class="form-group">
      <div class="col-sm-12"align="right" style="color:white;">
			<h3> User : <?php echo $name; ?>  </h3><input type="submit" value="Logout"  id="btn" >
		</div>
	</div>

</form>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <section>
    <div class="container"style= "padding-top:130px">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/01.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
<?php session_start();  
include('../condb.php'); 
  $id =  $row["id"];
  $name =  $row["name"];
  $pet =  $row["pet"];
  $date =  $row["date"];
  $qtype =  $row["qtype"];


  echo  "<div class='col-sm-12' align='center'> <h1> คิวการรักษา </h1> <br> </div>";
  $qe = "SELECT * FROM quene" or die("Error:" . mysqli_error());
  $re = mysqli_query($con, $qe); 
  while($row = mysqli_fetch_array($re)) { 
    $id =  $row["id"];
  $name =  $row["name"];
  $pet =  $row["pet"];
  $date =  $row["date"];
  $qtype =  $row["qtype"];
    echo  "<div class='col-sm-12' align='center'> คิวที่ : $id ชื่อ : 
     $name สัตว์เลี้ยง : $pet : วันที่ $date : ประเภทการรักษา $qtype <br> </div> ";
  }
?>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/02.png" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
          <?php session_start();  
include('../condb.php'); 
  $id =  $row["id"];
  $name =  $row["name"];
  $pet =  $row["pet"];
  $date =  $row["date"];
  $qtype =  $row["qtype"];


  echo  "<div class='col-sm-12' align='center'> <h1> คิวการรักษานอกสถานที่ </h1> <br> </div>";
  $qe = "SELECT * FROM offsite" or die("Error:" . mysqli_error());
  $re = mysqli_query($con, $qe); 
  while($row = mysqli_fetch_array($re)) { 
    $id =  $row["id"];
  $name =  $row["name"];
  $location =  $row["location"];
  $time =  $row["time"];
  $symptom =  $row["symptom"];
    echo  "<div class='col-sm-12' align='center'> คิวที่ : $id ชื่อ : 
     $name สัตว์เลี้ยง : $time : อาการเจ็บป่วย $symptom : สถานที่ $location <br> </div> ";
  }
?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/03.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <?php
          include('../condb.php'); 
          $id =  $row["id"];
          $name =  $row["name"];
          $pet =  $row["pet"];
          $time =  $row["time"];

  echo  "<div class='col-sm-12' align='center'> <h1> รับฝากเลี้ยง </h1> <br> </div>";
  $qe = "SELECT * FROM tbl" or die("Error:" . mysqli_error());
  $re = mysqli_query($con, $qe); 
  while($row = mysqli_fetch_array($re)) { 
    $id =  $row["id"];
  $name =  $row["name"];
  $pett =  $row["pett"];
  $time =  $row["time"];
    echo  "<div class='col-sm-12' align='center'> คิวที่ : $id/10 ชื่อ : 
     $name สัตว์เลี้ยง : $pett : ระยะเวลา $time <br> </div> ";
  }
?>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
