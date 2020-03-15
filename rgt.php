<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">
  </head>
  
  
  <style>
  body {
  background: url(https://download.hipwallpaper.com/desktop/1920/1080/17/45/eUtrCE.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;  
  -moz-background-size: cover;  
  -o-background-size: cover;  
  background-size: cover;
}

.j {
  font-family: 'Pattaya', sans-serif;
  text-align: center;
  color: #fff;
  background-color: lightgrey;
  opacity: 0.9;
  filter: alpha(opacity=100);
  border: solid black;
  padding: 40px;
  margin-left: 325px;
  width: 900px;
  height: 700px;
}

.j h1 {
  font-size: 50px;
  color:black;
}
  form {
  margin-top: 50px;
  margin-left: 0px;
  color: black;
  }
  input, #type, #location {
  border: solid black;
  border-style: solid;
  border-width: medium;
  }
  #sb{
  margin-top: 10px;
  margin-left: 100px;
  display: inline-block;
  border: 2px solid black;
  padding: 10px 20px;
  color: black;
  text-decoration: none;
  transition: 0.3s;
  }
  #sb:hover{
    background: #fff;
    color: #000;
  }
  label{
    font-size: 25px;
  }
  </style>
  <body>
  <section class="j" >
  <h1>ลงทะเบียนรักษานอกสถานที่</h1>
  <form action="db_connect.php" method="post">
    <label for="name">ชื่อเจ้าของ:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="time">ชนิดของสัตว์:</label>
    <input type="text" id="time" name="time"><br><br>

    <label for="type">ประเภทสัตว์:</label>
    <select id="type" name="type" style="width:200px;">
    <option value="0">เลือกประเภทสัตว์</option>
      <option value="สัตว์น้ำ">สัตว์น้ำ</option>
      <option value="สัตว์บก">สัตว์บก</option>
      <option value="สัตว์ปีก">สัตว์ปีก</option>
      <option value="สัตว์เลื่อยคลาน">สัตว์เลื่อยคลาน</option>
      <option value="อื่นๆ">อื่นๆ</option>
    </select><br><br>

    <label for="location">สถานที่:</label>
    <input type="text" id="location" name="location"><br><br>

    <label for="symptom">อาการที่ป่วย:</label>
    <input type="text" id="symptom" name="symptom"><br>
    <input type="submit" id="sb" value ="บันทึกข้อมูล">
  </form><br>
  <a href="index.php">กลับไปหน้าหลัก</a>
</section>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
