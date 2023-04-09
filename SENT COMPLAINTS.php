<?php include("angu_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>COMPLAINTS</h1></center>
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
	return flag;
}
	</script>

</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <center><p><table width="463" border="0">
    <tr>
      <th width="106" scope="row">COMPLAINTS</th>
      <td width="341"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
      <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="SEND"  onclick="return validate()" /></th>
    </tr>
  </table></p></center>
  <div align="center"></div>
</form>
</body>
</html>
<?php
session_start();
$lid=$_SESSION['lid'];
include("connect.php");
if(isset($_POST['button']))
{
	$complaints=$_POST['textfield'];

	$qry=mysql_query("INSERT INTO `complaints`(`anganavady_id`,`complaints`,`date`,`reply`)VALUES('$lid','$complaints',curdate(),'pending')");
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