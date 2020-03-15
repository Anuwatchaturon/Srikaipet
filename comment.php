<!DOCTYPE html>
<html>
 <head>
  <title>Comment</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
 </head>
 <style>
 body{
    background: url(http://getwallpapers.com/wallpaper/full/9/1/2/841921-new-full-hd-background-images-1920x1080.jpg) no-repeat center center fixed;
   -webkit-background-size: cover;  
   -moz-background-size: cover;  
   -o-background-size: cover;  
   background-size: cover;
 }
 h2,.container{
    font-family: 'Kanit', sans-serif;
    opacity: 0.85;
    filter: alpha(opacity=100);
 }
 </style>
 <body>
  <br/>
  <h2 align="center">แสดงความคิดเห็น</h2>
  <br />
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="ระบุชื่อ" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="แสดงความคิดเห็น" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="โพสต์" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>