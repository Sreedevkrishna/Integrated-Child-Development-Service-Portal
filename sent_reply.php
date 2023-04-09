<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="463" border="1">
    <tr>
      <th width="106" scope="row">Reply</th>
      <td width="341"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="SEND" /></th>
    </tr>
  </table>
  <div align="center"></div>
</form>
</body>
</html>
<?php
$cid=$_GET['id'];
include("connect.php");
if(isset($_POST['button']))
{
	$reply=$_POST['textfield'];
	
	$qry=mysql_query("UPDATE `complaints` SET `reply`='$reply' WHERE `complaint_id`='$cid'");
	if($qry>0)
	{
		?>
        <script>
		alert("successfully replied...");
		window.location="admin_home.php";
		</script>
        <?php

	}
	}
	?>