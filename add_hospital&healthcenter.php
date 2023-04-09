<?php include("admin_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>HOSPITAL AND HEALTH CENTER DETAILS</h1></center>
<script>
function validate()
{
	var flag=true;
	if(document.getElementById("textfield").value=="")
	{
		flag=false;
		document.getElementById("a").style.visibility="visible";
	}
	else
	{
		document.getElementById("a").style.visibility="hidden";
	}
	if(document.getElementById("textfield2").value=="")
	{
		flag=false;
		document.getElementById("b").style.visibility="visible";
	}
	else
	{
		document.getElementById("b").style.visibility="hidden";
	}
	if(document.getElementById("textfield4").value=="")
	{
		flag=false;
		document.getElementById("c").style.visibility="visible";
	}
	else
	{
		document.getElementById("c").style.visibility="hidden";
	}
	if(document.getElementById("textfield5").value=="")
	{
		flag=false;
		document.getElementById("d").style.visibility="visible";
	}
	else
	{document.getElementById("d").style.visibility="hidden";
	}
	
		
		if(document.getElementById("textfield6").value=="")
{
	document.getElementById("e").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("e").style.visibility="hidden";
}
if(document.getElementById("textfield6").value.length!=6)
{
	document.getElementById("e").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("e").style.visibility="hidden";
}

	
	
	
	
	
	if(document.getElementById("textfield7").value=="")
{
	document.getElementById("f").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("f").style.visibility="hidden";
}
if(document.getElementById("textfield7").value.length!=10)
{
	document.getElementById("f").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("f").style.visibility="hidden";
}

if(document.getElementById("textfield8").value=="")
{
	document.getElementById("g").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("g").style.visibility="hidden";
}

 var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

 var emailid=document.getElementById("textfield8").value;

 var matchArray = emailid.match(emailPat);

 if (matchArray == null)

  {

	  document.getElementById("g").style.visibility="visible";
  	  flag=false;
 }
else
 {
  document.getElementById("g").style.visibility="hidden";
 }
 
  if(document.getElementById("select").value=="-1")
{
	document.getElementById("h").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("h").style.visibility="hidden";
}
 
 
 if(document.getElementById("textfield9").value=="")
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
		
</script>
</head>
<style>


.sre{
	box-shadow:20px 20px 20px rgba(0,0,0,0.15);
	border-collapse:collapse;
	background:#390;
	box-sizing:content-box;
	    display:compact;
    justify-content: center;
    align-items: center;
    padding: 0px 1px;
    min-width: 120px;
    height: 30px;
    background-color: #57b846;
    border-radius: 10px;
    font-family: Poppins-Regular;
    font-size: 20px;
    color: #fff;
    line-height: 1.2;
	alignment-adjust:central;
	}
	.dev{
		color:#FFF;
		text-align:left;
		
		}
</style>
<body>
<form id="form1" name="form1" method="post" action="">
  <center><p><table width="200" border="0" class="dev">
    <tr>
      <th scope="row">NAME</th>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
      <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">PLACE</th>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" /></td>
      <td><div id="b" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">DISTRICT</th>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" /></td>
      <td><div id="c" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">POST</th>
      <td><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5" /></td>
      <td><div id="d" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">PINCODE</th>
      <td><label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6" /></td>
      <td width="299"><div id="e" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">PHONE</th>
      <td><label for="textfield7"></label>
      <input type="text" name="textfield7" id="textfield7" /></td>
      <td width="299"><div id="f" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">EMAIL</th>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" /></td>
       <td width="299"><div id="g" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">TYPE</th>
      <td><label for="select"></label>
        <select name="select" id="select">
        <option value="-1">SELECT</option>
          <option value="HOSPITAL">HOSPITAL</option>
          <option value="HEALTH CENTER">HEALTH CENTER</option>
      </select>        <label for="checkbox"></label></td> 
      <td width="299"><div id="h" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">PASSWORD</th>
      <td><label for="textfield9"></label>
      <input type="password" name="textfield9" id="textfield9" /></td>
       <td width="299"><div id="k" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="ADD" onclick="return validate()" class="sre" /></th>
    </tr>
  </table></p></center>
 
</form>
</body>
</html>

<?php
include("connect.php");
if(isset($_POST['button']))
{
	$name=$_POST['textfield'];
	$place=$_POST['textfield2'];
	$district=$_POST['textfield4'];
	$post=$_POST['textfield5'];
	$pincode=$_POST['textfield6'];
	$phone=$_POST['textfield7'];
	$email=$_POST['textfield8'];
	$type=$_POST['select'];
	$password=$_POST['textfield9'];
	mysql_query("INSERT INTO `login`(`username`,`password`,`type`)VALUES('$name','$password','$type')");
	$lid=mysql_insert_id();
	$qry=mysql_query("INSERT INTO `hospital_healthcenter`(`name`,`place`,`pin`,`post`,`district`,`phone`,`email`,`type`,`login_id`)VALUES('$name','$place','$pincode','$post','$district','$phone','$email','$type','$lid')");

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


	if($qry>0)
	{
		?>
        <script>
		alert("successfully added...");
		window.location="admin_home.php";
		</script>
        <?php

	}
	}
	?>
	<?php include("footer1.php")?>