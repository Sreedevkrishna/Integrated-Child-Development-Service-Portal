<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login_temp/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_temp/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_temp/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_temp/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_temp/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_temp/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_temp/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_temp/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_temp/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_temp/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_temp/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">
						Forget Password
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="textfield">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						

						<div>
							
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="button">
							SENT
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
                       
							
						</span>
                        
					</div>

					<div class="login100-form-social flex-c-m">
						 
					</div>
				</form>

				<div class="login100-more" style="background-image: url('login_temp/images/bg-01.jpg');">
         
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="login_temp/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login_temp/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login_temp/vendor/bootstrap/js/popper.js"></script>
	<script src="login_temp/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login_temp/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login_temp/vendor/daterangepicker/moment.min.js"></script>
	<script src="login_temp/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login_temp/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login_temp/js/main.js"></script>

</body>
</html>
<?php
if(isset($_POST['button'])){

	$email=$_POST['textfield'];
	include("connect.php");
	$res=mysql_query("SELECT * FROM `login` WHERE `username`='$email'");
	if(mysql_num_rows($res)>0){
		$row=mysql_fetch_array($res);
		$password=$row['password'];
		///////////////start
		
		require("class.phpmailer.php");

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = "childintegrated@gmail.com";  // SMTP username gmail username
$mail->Password = "9847825919"; // SMTP password   gmail password


$mail->From = "ICDS"; // from email address
$mail->FromName = "childintegrated@gmail.com"; //from name
 
//$mail->AddAddress($email1);
//if(!empty($email2)){
    //$mail->AddAddress($email2);
//}
//$mail->AddAddress("haneefapkv@gmail.com");  
$mail->AddAddress($email);                   // to address 
//$mail->AddReplyTo($email);
//$mail->AddReplyTo("$remail2");

//$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("resume/$resume");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "your password";
$mail->Body    = "password:".$password;
$mail->AltBody = "";

$mail->Send();
?>
<script>
alert("success...! check your mail");
window.location="index.php";
</script>
<?php
		//////////////end
		
	}else{
	?>
    <script>
	alert("invalid email");
	</script>
    <?php	
	}
	
}
?>

</body>
</html>