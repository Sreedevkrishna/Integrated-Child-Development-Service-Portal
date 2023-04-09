
<?php include("admin_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	if(document.getElementById("textfield5").value=="")
	{
		flag=false;
		document.getElementById("c").style.visibility="visible";
	}
	else
	{document.getElementById("c").style.visibility="hidden";
	}
		
		if(document.getElementById("textfield6").value=="")
{
	document.getElementById("d").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("d").style.visibility="hidden";
}
if(document.getElementById("textfield6").value.length!=6)
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
		flag=false;
		document.getElementById("e").style.visibility="visible";
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

<body>
<?php
include("connect.php");

$cid=$_GET['id'];
$qry=mysql_query("SELECT * FROM `anganavady` WHERE `anganavady_id`='$cid'");
$row=mysql_fetch_array($qry);
?>
<form id="form1" name="form1" method="post" action="">
  <center><p><table width="200" border="0">
    <tr>
      <th scope="row">NAME</th>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" value="<?php echo $row['name']?>" /></td>
      <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">LOCATION</th>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" value="<?php echo $row['location']?>"/></td>
      <td><div id="b" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">POST</th>
      <td><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5"value="<?php echo $row['post']?>" /></td>
      <td><div id="c" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
     <tr>
      <th scope="row">PINCODE</th>
      <td><label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6" value="<?php echo $row['pin']?>" /></td>
      <td><div id="d" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">DISTRICT</th>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" value="<?php echo $row['district']?>"/></td>
      <td><div id="e" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    
   
    <tr>
      <th scope="row">PHONE</th>
      <td><label for="textfield7"></label>
      <input type="text" name="textfield7" id="textfield7" value="<?php echo $row['phone']?>"/></td>
      <td><div id="f" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th scope="row">EMAIL</th>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" /></td>
      <td><div id="g" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    
    <tr>
      <th scope="row">PASSWORD</th>
      <td><label for="textfield9"></label>
      <input type="password" name="textfield9" id="textfield9" /></td>
      <td><div id="k" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>

    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="UPDATE" value="ADD" onclick="return validate()"/></th>
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
	$loc=$_POST['textfield2'];
	$district=$_POST['textfield4'];
	$post=$_POST['textfield5'];
	$pincode=$_POST['textfield6'];
	$phone=$_POST['textfield7'];
	$email=$_POST['textfield8'];
	
	$password=$_POST['textfield9'];
	mysql_query("INSERT INTO `login`(`username`,`password`,`type`)VALUES('$email','$password','anganavady')");
	$lid=mysql_insert_id();
	$qry=mysql_query("UPDATE `anganavady` SET `name`='$name',`district`='$district',`location`='$loc',`pin`='$pincode',`phone`='$phone',`post`='$post' where `anganavady_id`='$cid'");
	if($qry>0)
	{
		?>
        <script>
		alert("successfully updated..");
		window.location="admin_home.php";
		</script>
        <?php

	}
	}
	?>
		
	<?php include("footer1.php")?>