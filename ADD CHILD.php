<?php include("angu_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>CHILD DETAILS </h1></center>
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
	if(document.getElementById("textfield5").value=="")
{
	document.getElementById("d").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("d").style.visibility="hidden";
}
 if(document.getElementById("textfield5").value.length!=10)
{
	document.getElementById("d").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("d").style.visibility="hidden";
}
  if(document.getElementById("textfield4").value=="")
{
	document.getElementById("e").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("e").style.visibility="hidden";
}

 var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

 var emailid=document.getElementById("textfield4").value;

 var matchArray = emailid.match(emailPat);

 if (matchArray == null)

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

<body>
<form id="form1" name="form1" method="post" action="">
 <center><p> <table width="200" border="1">
    <tr>
      <th scope="row">NAME</th>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
       <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">DOB</th>
      <td><label for="textfield2"></label>
      <input type="date" name="textfield2" id="textfield2" /></td>
       <td><div id="b" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">GENDER</th>
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
      <th scope="row">PARENT NAME </th>
      <td><label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3" /></td>
       <td><div id="c" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">PARENT PHONE</th>
      <td><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5" /></td>
       <td><div id="d" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">PARANT EMAIL</th>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" /></td>
       <td><div id="e" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="ADD"  onclick="return validate()"/></th>
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
	$gender=$_POST['radio'];
	$parent_name=$_POST['textfield3'];
	$parent_phone=$_POST['textfield5'];
	$parent_email=$_POST['textfield4'];
	

	$qry=mysql_query("INSERT INTO `child`(`name`,`dob`,`gender`,`parent_name`,`parent_phone`,`parent_email`)VALUES('$name','$dob','$gender','$parent_name','$parent_phone','$parent_email')");
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