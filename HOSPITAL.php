<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>HOSPITAL AND HEALTHCENTER DETAILS</h1></center>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <th scope="row">NAME</th>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <th scope="row">PLACE</th>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <th scope="row">DISTRICT</th>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" /></td>
    </tr>
    <tr>
      <th scope="row">POST</th>
      <td><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5" /></td>
    </tr>
    <tr>
      <th scope="row">PINCODE</th>
      <td><label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6" /></td>
    </tr>
    <tr>
      <th scope="row">PHONE</th>
      <td><label for="textfield7"></label>
      <input type="text" name="textfield7" id="textfield7" /></td>
    </tr>
    <tr>
      <th scope="row">EMAIL</th>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" /></td>
    </tr>
    <tr>
      <th scope="row">TYPE</th>
      <td><label for="select"></label>
        <select name="select" id="select">
          <option value="HOSPITAL">HOSPITAL</option>
          <option value="HEALTH CENTER">HEALTH CENTER</option>
      </select>        <label for="checkbox"></label></td>
    </tr>
    <tr>
      <th scope="row">PASSWORD</th>
      <td><label for="textfield9"></label>
      <input type="password" name="textfield9" id="textfield9" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="ADD" /></th>
    </tr>
  </table>
  <label for="textfield3"></label>
  <input type="text" name="textfield3" id="textfield3" />
</form>
</body>
</html>

<?php
include("../../Users/sreed/Desktop/icds/connect.php");
if(isset($_POST['textfield3']))
{
	$name=$_POST['textfield'];
	$place=$_POST['textfield2'];
	$district=$_POST['textfield4'];
	$post=$_POST['textfield5'];
	$pincode=$_POST['textfield6'];
	$phone=$_POST['textfield7'];
	$email=$_POST['textfield8'];
	$type=$_POST['select'];
	$password=$_POST['textfield9'];
	$qry=mysql_query("INSERT INTO'hospital'('name','place','district','post','pincode','phone','email,'type','password')VALUES('$name','$place','$district','$post','$pincode','$phone','$email','$type','$password')");
	if($qry>0)
	{
		?>
        <script>
		alert("successfully added...");
		</script>
        <?php

	}
	}