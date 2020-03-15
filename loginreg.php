<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>

<style>
body {
	margin:0;
	color:#edf3ff;
	background:#c8c8c8;
	background:url(https://i.pinimg.com/originals/2e/2a/af/2e2aaf0b372c656705800e0606ca2fce.jpg) fixed;
	background-size: cover;
	font:600 16px/18px 'Open Sans',sans-serif;
}
:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width: 100%;
	margin:auto;
	max-width:510px;
	min-height:510px;
	position:relative;	
	background-size: cover;
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(0,0,0,0.5);
}
.login-html .sign-in-htm,
.login-html .for-pwd-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	-webkit-transform:rotateY(180deg);
	        transform:rotateY(180deg);
	-webkit-backface-visibility:hidden;
	        backface-visibility:hidden;
	-webkit-transition:all .4s linear;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .for-pwd,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .for-pwd:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	-webkit-perspective:1000px;
	        perspective:1000px;
	-webkit-transform-style:preserve-3d;
	        transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	-webkit-transition:all .2s ease-in-out 0s;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	-webkit-transform:scale(1) rotate(45deg);
	        transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	-webkit-transform:scale(1) rotate(-45deg);
	        transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .for-pwd + .tab + .login-form .sign-in-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}
.login-html .for-pwd:checked + .tab + .login-form .for-pwd-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
::placeholder {
  color: white;
}
</style>


<div class="login-wrap" style= "padding-top:130px">
	<div class="login-html" style= "padding-top:130px">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">log In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Register</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
                <form  name="formlogin" action="checklogin.php" method="POST" id="login">
                    <input type="text"  name="username"  class="input" required placeholder="Username"/>
				</div>
				<div class="group">
                    <input type="password" name="password" class="input" required placeholder="Password" />
				</div>
				<div class="group">
					<button type="submit" class="button" value="Log In">Login </button>
                </form>
				</div>
    
			</div>
			<div class="for-pwd-htm">
				<div class="group">
				<form method="post">
                    <input type="text" placeholder="Username" id="username" onkeyup="check_user()"name="username"class="input" required/>
                <div id="checking"></div>
				</div>

                <div class="group">
                    <input type="password" placeholder="Password" name="password" class="input"required/>
                    <div id="checking"></div>
				</div>

                <div class="group">
                    <input type="text" placeholder= "Name" id="name" name="name" class="input" required/>
                    <div id="checking"></div>
				</div>

				<div class="group">
                <a href="loginreg.php"><input type="submit" id="register" name="register" value="register" class="button" /></a>
                    <div id="checking"></div> 
				</div>
	
			</div>
		</div>
	</div>
</div>
        
    
<?php if(isset($_POST['register'])){
        
        $username= $_POST['username'] ;
        $password= $_POST['password'];
        $name= $_POST['name'];
        $level= "member";

        $q="INSERT INTO `login` (`id`, `username`, `password`,`name`,`level`)
            VALUES('', '".$username."' , '".$password ."', '".$name ."','".$level ."')" ;
        $r= mysqli_query($con, $q) ;

        if($r) {
            
        }else{
            echo $q;
        }
}

?>
<script src ="sub_file/jquery-3.4.1.js"></script>
<script>
        document.getElementById("register").disabled= true;
    function check_user(){
        var username = document.getElementById("username").value;
        
        $.post("sub_file/user_check.php",
        {
            user: username
        },

        function(data, status){

            if(data=='p style="color:red">Not Use</p>'){
                document.getElementById("register").disabled= true;
            }else{
                document.getElementById("register").disabled= false;
            }
           document.getElementById("checking").innerHTML = data;
        }
        );
    }

</script>