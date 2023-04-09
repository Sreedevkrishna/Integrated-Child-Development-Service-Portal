<?php include("angu_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>STUDENT DETAILS</h1></center>
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
	{
		document.getElementById("d").style.visibility="hidden";
	}
	if(document.getElementById("textfield5").value=="")
{
	document.getElementById("e").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("e").style.visibility="hidden";
}
 if(document.getElementById("textfield5").value.length!=6)
{
	document.getElementById("e").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("e").style.visibility="hidden";
}


if(document.getElementById("textfield6").value=="")
	{
		flag=false;
		document.getElementById("f").style.visibility="visible";
	}
	else
	{
		document.getElementById("f").style.visibility="hidden";
	}




if(document.getElementById("textfield7").value=="")
{
	document.getElementById("g").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("g").style.visibility="hidden";
}
 if(document.getElementById("textfield7").value.length!=10)
{
	document.getElementById("g").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("g").style.visibility="hidden";
}
 if(document.getElementById("textfield8").value=="")
{
	document.getElementById("h").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("h").style.visibility="hidden";
}

 var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

 var emailid=document.getElementById("textfield5").value;

 var matchArray = emailid.match(emailPat);

 if (matchArray == null)

  {

	  document.getElementById("h").style.visibility="visible";
  	  flag=false;
 }
else
 {
  document.getElementById("h").style.visibility="hidden";
 }
 	if(document.getElementById("fileField").value=="")
{
	document.getElementById("i").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("i").style.visibility="hidden";
}
	return flag;
}
	</script>
</head>
<style>
		
.dev{

	font-family: sans-serif;
	text-align: left;
}

</style>

<body>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <center><p><table width="*" border="0" class="dev">
    <tr>
      <th scope="row">NAME</th>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
             <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">GENDER</th>
      <td><p>
        <label for="radio"></label>
        <input type="radio" name="radio" id="radio" value="male" checked="checked"/>
      MALE</p>
      <p>
        <input type="radio" name="radio" id="radio" value="female" />
        <label for="radio"></label>
      FEMALE</p></td>
    </tr>
    <tr>
      <th scope="row">DOB</th>
      <td><label for="textfield2"></label>
      <input type="date" name="textfield2" id="textfield2" /></td>
             <td><div id="b" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">PLACE</th>
      <td><label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3" /></td>
             <td><div id="c" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">POST</th>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" /></td>
             <td><div id="d" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">PIN</th>
      <td><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5" /></td>
             <td><div id="e" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">PARENT NAME </th><br><br>
      <td><label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6" /></td>
             <td><div id="f" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">PARENT PHONE </th><br><br>
      <td><label for="textfield7"></label>
      <input type="text" name="textfield7" id="textfield7" /></td>
             <td><div id="g" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">PARENT EMAIL</th><br><br>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" /></td>
             <td><div id="h" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
     
      <th scope="row">PHOTO</th>
      <td><label for="fileField"></label>
      <input type="file" name="fileField" id="fileField" /></td>
             <td><div id="i" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="ADD"  onclick="return validate()"/></th>
    </tr>
  </table></p></center>
</form>
</body>
</html>

<?php
session_start();
$lid=$_SESSION['lid'];
include("connect.php");
if(isset($_POST['button']))
{
	$name=$_POST['textfield'];
	$gender=$_POST['radio'];
	$dob=$_POST['textfield2'];
	$place=$_POST['textfield3'];
	$post=$_POST['textfield4'];
	$pin=$_POST['textfield5'];
	$parent_name=$_POST['textfield6'];
	$parent_phone=$_POST['textfield7'];
	$parent_email=$_POST['textfield8'];
	$photo=$_FILES['fileField']['name'];
	move_uploaded_file($_FILES['fileField']['tmp_name'],"student/".$photo);
	

	$qry=mysql_query("INSERT INTO `student`(`name`,`gender`,`dob`,`place`,`post`,`pin`,`parent_name`,`parent_phone`,`parent_email`,`photo`,`angu_lid`)VALUES('$name','$gender','$dob','$place','$post','$pin','$parent_name','$parent_phone','$parent_email','$photo','$lid')");
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