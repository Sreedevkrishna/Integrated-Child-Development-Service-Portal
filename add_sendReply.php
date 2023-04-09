<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <table width="465" border="1">
      <tr>
        <td width="142">REPLY</td>
        <td width="307"><label for="textfield"></label>
        <input type="text" name="textfield" id="textfield" /></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="button" id="button" value="SEND" />
        </div></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['button']))
{
	$reply=$_POST['textfield'];
	$lid=mysql_insert_id();
	$qry=mysql_query("INSERT INTO `sendreply`(`reply')VALUES('$reply')");
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