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
	if(document.getElementById("fileField").value=="")
{
	document.getElementById("b").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("b").style.visibility="hidden";
}
	return flag;
}

</script>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <center><p><table width="200" border="0">
    <tr>
      <th scope="row">NAME</th>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
       <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th scope="row">IMAGE</th>
      <td><label for="fileField"></label>
      <input type="file" name="fileField" id="fileField" /></td>
      <td width="299"><div id="b" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="ADD" onclick="return validate()"/></th>
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
	$img=$_FILES['fileField']['name'];
	move_uploaded_file($_FILES['fileField']['tmp_name'],"nu/".$img);
	$qry=mysql_query("INSERT INTO `nutrition`(`nu_name`,`pic`)VALUES('$name','$img')");
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