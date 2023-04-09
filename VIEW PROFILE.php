<?php include("staff_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>PROFILE</h1></center>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
 <center><p> <table width="200" border="0">
   <?php
	include("connect.php");
	session_start();
    $lid=$_SESSION['lid'];
	$qry=mysql_query("SELECT * FROM `staff` WHERE `login_id`='$lid'");
	if(mysql_num_rows($qry)>0)
	{
		$row=mysql_fetch_array($qry);
	?>
    
    <tr>
      <th scope="row">NAME</th>
      <td><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5" disabled="disabled" value="<?php echo $row['name']?>"/></td>
    </tr>
    <tr>
      <th scope="row">GENDER</th>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" disabled="disabled" value="<?php echo $row['gender']?>"/></td>
    </tr>
    <tr>
      <th scope="row">PHONE</th>
      <td><label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3" disabled="disabled" value="<?php echo $row['phone']?>"/></td>
    </tr>
    <tr>
      <th scope="row">EMAIL</th>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" disabled="disabled" value="<?php echo $row['email']?>"/></td>
    </tr>
    <tr>
      <th scope="row">DOB</th>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" disabled="disabled" value="<?php echo $row['dob']?>"/></td>
    </tr>
  </table>
   </p></center>
  <?php
	}
	?>
</form>
</body>
</html>
<?php include("footer1.php")?>