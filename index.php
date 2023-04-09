<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Awesome Login Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Awesome Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function validate()
if(document.getElementById("textfield2").value=="")
{
	document.getElementById("k").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("k").style.visibility="hidden";
}
		 		 		 		 		 		 		 	
	return flag;
}

function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="web/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="web/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,vietnamese" rel="stylesheet">
<style type="text/css">
body,td,th {
	color: #BBB;
}
a:link {
	color: #0CF;
}
a:visited {
	color: #0FF;
}
.login100-form-btn{
	color:#FFF;
    
	text-decoration:none;
	display:absolute;
	display:block;
	width:150px;
	height:40px;
	background:#559F00;
	text-align:center;
	padding-center:20px;
	
	transition:0.5s;
	box-shadow:-20px 20px 10px rgba(0,0,0,0.5);


}
</style>
<!-- //web-fonts -->
</head>
<body bgcolor="#777777">
<div data-vide-bg="web/video/social2">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>integrated child devolopment service</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Login</h2>
			</div>
			<div class="sub-main-w3">	
				<form action="#" method="post">
				  <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input placeholder="NAME" class="input100" type="name" name="textfield">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
			<div class="wrap-input100 validate-input" data-validate="Password is required"><span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
			  <input placeholder="PASSWORD" class="input100" type="password" name="textfield2">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
						    <td width="299"><div id="k" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
					</div>
			<div class="rem-w3">

			 
			  <a href="forgot_password.php">Forgot Password?</a>
						<div class="clear"></div>
				  </div>
					
					<center><button  class="login100-form-btn" type="submit" name="button">
							Login
				  </button></center>
				</form>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; 2020 child care service. All rights reserved | visit for more <a href="http://child-care.com">icds</a></p>
		</div>
		<!--//footer-->
	</div>
</div>
<!-- js -->
<script type="text/javascript" src="web/js/jquery-2.1.4.min.js"></script>
<script src="web/js/jquery.vide.min.js"></script>

</body>
</html>
<?php
include("connect.php");
if(isset($_POST['button']))
{
	$username=$_POST['textfield'];
	$password=$_POST['textfield2'];
	$qry=mysql_query("SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'");
	if(mysql_num_rows($qry)>0)
	{
		$row=mysql_fetch_array($qry);
		$type=$row['type'];
		$lid=$row['login_id'];
		session_start();
		$_SESSION['type']=$type;
		$_SESSION['lid']=$lid;
		if($type=="admin")
		{
			header("location:admin_home.php");
		}
		else if($type=="anganavady")
		{
			header("location:angu_home.php");
		}
		else if($type=="HEALTH_CENTER")
		{
			header("location:health_home.php");
		}
		else if($type=="HOSPITAL")
		{
			header("location:health_home.php");
		}
		else if($type=="mother")
		{
			header("location:user_home.php");
		}
		else if($type=="staff")
		{
			header("location:staff_home.php");
		}
	}
	else
	{
		?>
        <script>
        alert("Invalid username or password");
        </script>
        <?php
	}
	
}
?>
