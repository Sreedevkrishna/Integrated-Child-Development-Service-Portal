<?php include("angu_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>MOTHER DETAILS </h1></center>
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
	document.getElementById("b").style.visibility="visible";
	flag=false;
}
else
{
document.getElementById("b").style.visibility="hidden";
}
	if(document.getElementById("textfield3").value=="")
	{
		flag=false;
		document.getElementById("c").style.visibility="visible";
	}
	else
	{
		document.getElementById("c").style.visibility="hidden";
	}
	if(document.getElementById("textfield4").value=="")
	{
		flag=false;
		document.getElementById("d").style.visibility="visible";
	}
	else
	{document.getElementById("d").style.visibility="hidden";
	}
	if(document.getElementById("textfield8").value=="")
{
	document.getElementById("e").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("e").style.visibility="hidden";
}
	if(document.getElementById("textfield8").value.length!=6)
{
	document.getElementById("e").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("e").style.visibility="hidden";
}
	if(document.getElementById("textfield5").value=="")
{
	document.getElementById("f").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("f").style.visibility="hidden";
}

 var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

 var emailid=document.getElementById("textfield5").value;

 var matchArray = emailid.match(emailPat);

 if (matchArray == null)

  {

	  document.getElementById("f").style.visibility="visible";
  	  flag=false;
 }
else
 {
  document.getElementById("f").style.visibility="hidden";
 }
 if(document.getElementById("textfield6").value=="")
{
	document.getElementById("g").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("g").style.visibility="hidden";
}
 if(document.getElementById("textfield6").value.length!=10)
{
	document.getElementById("g").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("g").style.visibility="hidden";
}
  
		return flag;
}
		
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<center><p>
<table width="200" border="0">
  <tr>
    <th scope="row">NAME</th>
    <td>
      <label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" />
      <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </td>
  </tr>
  <tr>
    <th scope="row">DOB</th>
    <td>
      <label for="textfield2"></label>
      <input type="date" name="textfield2" id="textfield2" />
      <td><div id="b" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
   </td>
  </tr>
  <tr>
    <th scope="row">PLACE</th>
    <td>
      <label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3" />
      <td><div id="c" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
 </td>
  </tr>
  <tr>
    <th scope="row">POST</th>
    <td>
      <label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" />
      <td><div id="d" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </td>
  </tr>
  <tr>
    <th scope="row">PIN</th>
    <td>
      <label for="textfield8"></label>
      <input type="text" name="textfield7" id="textfield8" />
      <td><div id="e" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
  </td>
  </tr>
  <tr>
    <th scope="row">EMAIL</th>
    <td>
      <label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5" />
      <td><div id="f" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
   </td>
  </tr>
  <tr>
    <th scope="row">PHONE</th>
    <td>
      <label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6" />
      <td><div id="g" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
</td>
  </tr>
  <tr>
    <th colspan="2" scope="row">
      <input type="submit" name="button" id="button" value="ADD" onclick="return validate()"/>
         
        <label for="textfield7"></label>
    </th>
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
	$dob=$_POST['textfield2'];
	$place=$_POST['textfield3'];
	$post=$_POST['textfield4'];
	$pin=$_POST['textfield7'];
	$email=$_POST['textfield5'];
	$phone=$_POST['textfield6'];
	mysql_query("INSERT INTO `login`(`username`,`password`,`type`)VALUES('$email','$phone','mother')");
	$lid=mysql_insert_id();
	$qry=mysql_query("INSERT INTO mother(`name`,`dob`,`place`,`post`,`pin`,`email`,`phone`,lid)VALUES('$name','$dob','$place','$post','$pin','$email','$phone','$lid')");
	if($qry>0)
	{
		?>
        <script>
		alert("successfully added...");
		window.location="angu_home.php";
		</script>
        <?php

	}
	}
	?>
	<?php include("footer1.php")?>