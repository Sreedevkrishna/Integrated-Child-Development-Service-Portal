<?php include("hospital_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function validate()
{
	var flag=true;
	if(document.getElementById("textfield2").value=="")
	{
		flag=false;
		document.getElementById("a").style.visibility="visible";
	}
	else
	{
		document.getElementById("a").style.visibility="hidden";
	}
	if(document.getElementById("textfield3").value.length!=10)
{
	document.getElementById("b").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("b").style.visibility="hidden";
}
if(document.getElementById("textfield4").value=="")
{
	document.getElementById("c").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("c").style.visibility="hidden";
}

 var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

 var emailid=document.getElementById("textfield4").value;

 var matchArray = emailid.match(emailPat);

 if (matchArray == null)

  {

	  document.getElementById("c").style.visibility="visible";
  	  flag=false;
 }
else
 {
  document.getElementById("c").style.visibility="hidden";
 }
 if(document.getElementById("textfield5").value=="")
{
	document.getElementById("d").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("d").style.visibility="hidden";
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
		return flag;
}
 </script>
</head>

<body><?php
include("connect.php");

$cid=$_GET['id'];
$qry=mysql_query("SELECT * FROM `staff` WHERE `staff_id`='$cid'");
$row=mysql_fetch_array($qry);
?>

<form id="form1" name="form1" method="post" action="">
  <center><p><table width="200" border="0">
    <tr>
      <td>NAME</td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" value="<?php echo $row['name']?>"/></td>
      <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><p>
        <label for="radio"></label>
        <input type="radio" name="radio" id="radio" value="male" checked="checked"/>
        MALE 
        <label for="radio2"></label>
        </p>
        <p>
          <input type="radio" name="radio" id="radio" value="female" />
      FEMALE</p></td>
    </tr>
    <tr>
      <td>PHONE</td>
      <td><label for="textfield3"></label>
      <input type="number" name="textfield3" id="textfield3" value="<?php echo $row['phone']?>"/></td>
      <td><div id="b" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" /></td>
      <td><div id="c" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><label for="textfield5"></label>
      <input type="date" name="textfield5" id="textfield5" value="<?php echo $row['dob']?>"/></td>
      <td><div id="d" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td>TYPE</td>
      <td><label for="select"></label>
      
          <select name="select" id="select">
            <option value="DOCTOR">DOCTOR</option>
            <option value="NURSE">NURSE</option>
          </select>
   </td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td><label for="textfield6"></label>
      <input type="password" name="textfield6" id="textfield6" /></td>
      <td><div id="e" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="update" onclick="return validate()" />
      </div></td>
    </tr>
  </table></p></center>
  <label for="textfield"></label>
  
</form>
</body>
</html>

<?php
session_start();
$hid=$_SESSION['lid'];
include("connect.php");
if(isset($_POST['button']))
{
	$name=$_POST['textfield2'];
	$gender=$_POST['radio'];
	$phone=$_POST['textfield3'];
	$email=$_POST['textfield4'];
	$dob=$_POST['textfield5'];
	$type=$_POST['select'];
	$password=$_POST['textfield6'];
	
	
	mysql_query("INSERT INTO `login`(`username`,`password`,`type`)VALUES('$email','$password','staff')");
	$lid=mysql_insert_id();
	$qry=mysql_query("UPDATE `staff` SET `name`='$name','gender'='$gender',`phone`='$phone','email'='$email',`dob='$dob','type'='$type' where `staff_id`='$cid'");
	if($qry>0)
	{
		?>
        <script>
		alert("successfully updated...");
		window.location="health_home.php";
		</script>
        <?php

	}
	}
	?>
    <?php include("footer1.php")?>
