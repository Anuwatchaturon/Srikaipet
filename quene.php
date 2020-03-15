<?php require_once("condb.php");?>
<?php
include('h.php');
include('cssq.css');
?>
<!doctype html>
<html>
<head>
<title>Quene</title>

</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>

<style>
body {
	margin:1;
	color:#edf3ff;
	background:#c8c8c8;
	background:url(https://images.hdqwalls.com/download/cat-face-jv-2880x1800.jpg) fixed;
	background-size: cover;
	font:600 16px/18px 'Open Sans',sans-serif;
}
:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}
</style>

<div class="container" style="padding-top:2.5px" align="center">
    <div class="container login-container">

    <p align="center" style="color:#2F4F4F;"><font size="10">กรอกข้อมูลจองคิว</font></p>
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h2 style="color:white;">ข้อมูลสัตว์เลี้ยง</h2>
                    <form method="post">
                        <div class="form-group">
                        <p style="color:white;">ชนิดของสัตว์เลี้ยง</p>
                            <input type="text" class="form-control"  name="pet" placeholder="*เช่น สุนัข แมว นก "required/>
                        </div>
                        <div class="form-group">
                        <p style="color:white;">สายพันธ์ุ</p>
                            <input type="text" class="form-control" name="species" />
                        </div>
                        <div class="form-group">เพศ<br><br>
                        <label for="male">เพศผู้</label>
                        <input type="radio" name="petgen" id="male" value="เพศผู้"><br>
                        <label for="female">เพศเมีย</label>
                        <input type="radio" name="petgen" id="female" value="เพศเมีย"><br>
                        <label for="other">ไม่ระบุเพศ</label>
                        <input type="radio" name="petgen" id="other" value="ไม่ระบุเพศ">
                        </div>

                        <div class="form-group">ประเภทของสัตว์เลี้ยง
                        <select id="pettype" name="pettype" style="color:black;">
                        <option value="สัตว์น้ำ" style="color:black;">สัตว์น้ำ</option>
                        <option value="สัตว์ปีก">สัตว์ปีก</option>
                        <option value="สัตว์บก">สัตว์บก</option>
                        <option value="สัตว์เลื้อยคลาน">สัตว์เลื้อยคลาน</option>
                        </select>
                        </div>
                        
                </div>
                <div class="col-md-6 login-form-2">
                    <h2>ข้อมูลเจ้าของ</h2><br><br><br>
                    
                        <div class="form-group">
                        <p style="color:white;">ชื่อเจ้าของ</p>
                            <input type="text" class="form-control" name="name"required/>
                        </div>
                        
                        <div class="form-group">
                        <p style="color:white;">ช่องทางติดต่อ</p>
                            <input type="text" class="form-control"name="contact" required/>
                        </div>

                        <div class="form-group">
                          <p style="color:white;"> วันที่การจอง </p>
                            <input type="date"name="date" style="color:black;" class="input" required />
                        </div>

                        <div class="form-group">
                        <p style="color:white;">ประเภทการจองคิว</p>
                        <select id="qtype" name="qtype" style="color:black;">
                        <option value="อาการป่วย">อาการป่วย</option>
                        <option value="อุบัติเหตุ" >อุบัติเหตุ</option>
                        <option value="รับยา" >รับยา</option>
                        <option value="พบสัตวเเพทย์" >พบสัตวเเพทย์</option>
                        </select>
                        </div><br><br>

                        <div class="form-group" align="center">
                        <a href="index.php"><button type="submit" class="btnSubmit" id="send" name="send">ยืนยัน</button></a>
                        </div>
                        <a href="index.php">กลับไปหน้าหลัก</a>
                </div>
            </div>  
        </div> 


</body>
<?php if(isset($_POST['send'])){

        $name= $_POST['name'] ;
        $contact= $_POST['contact'] ;
        $date=  $_POST["date"];
        $qtype=  $_POST["qtype"];
        $pet=  $_POST["pet"];
        $species=  $_POST["species"];
        $pettype=  $_POST["pettype"];
        $petgen=  $_POST["petgen"];
        $q="INSERT INTO `quene` (`id`, `name`, `contact`,`date`,`qtype`,`pet`,`species`,`pettype`,`petgen`)
            VALUES('', '".$name."' , '".$contact ."', '".$date ."','".$qtype ."','".$pet ."','".$species ."','".$pettype ."','".$petgen ."')" ;
        $r= mysqli_query($con, $q) ;

        if($r) {
            
        }else{
            echo $q;
        }
}

?>
</html>