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
	return flag;
}
		
</script>
</head>

<body>
<?php
include("connect.php");

$cid=$_GET['id'];
$qry=mysql_query("SELECT * FROM `calender` WHERE `calender_id`='$cid'");
$row=mysql_fetch_array($qry);
?>
<form id="form1" name="form1" method="post" action="">
  <center><p><table width="276" border="0">
    <tr>
      <td width="170">SUBJECT</td>
      <td width="90"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" value="<?php echo $row['subject']?>"/></td>
      <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td>MESSAGE</td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" value="<?php echo $row['message']?>"/></td>
       <td><div id="b" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="UPDATE" onclick="return validate()" />
      </div></td>
    </tr>
  </table></p></center>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	$subject=$_POST['textfield'];
	$message=$_POST['textfield2'];
	
	$qry=mysql_query("UPDATE `calender` SET `subject`='$subject',`message`='$message' WHERE `calender_id`='$cid'");
	if($qry>0)
	{
		?>
        <script>
		alert("successfully updated...");
		window.location="admin_home.php";
		</script>
        <?php

	}
	}
	?>
	<?php include("footer1.php")?>