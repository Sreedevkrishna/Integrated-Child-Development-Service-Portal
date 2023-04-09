
<?php
include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="353" height="357" border="0" align="center">
    <tr>
      <th scope="row">Username</th>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <th height="99" scope="row">Password</th>
      <td><label for="textfield2"></label>
      <input type="password" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <th height="186" colspan="2" scope="row"><input type="submit" name="button" id="button" value="Login" /></th><BR><BR><BR>
      <th><a href="forgot_password.php">FORGOT PASSWORD</a></th>
    
    </tr> 
  </table>
</form>
</body>
</html>

<?php
include("connect.php");
if(isset($_POST['button']))
{
	$username=$_POST['textfield'];
	$password=$_POST['textfield2'];
	$qry=mysql_query("SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'");
	if(mysql_num_rows($qry)>0)
	{
		$row=mysql_fetch_array($qry);
		$type=$row['type'];
		$lid=$row['login_id'];
		session_start();
		$_SESSION['lid']=$lid;
		if($type=="admin")
		{
			header("location:admin_home.php");
		}
		else if($type=="anganavady")
		{
			header("location:angu_home.php");
		}
		else if($type=="HEALTH_CENTER")
		{
			header("location:health_home.php");
		}
		else if($type=="HOSPITAL")
		{
			header("location:health_home.php");
		}
		else if($type=="mother")
		{
			header("location:user_home.php");
		}
		else if($type=="staff")
		{
			header("location:staff_home.php");
		}
	}
	else
	{
		?>
        <script>
        alert("Invalid username or password");
        </script>
        <?php
	}
	
}
?>


<?php
include("footer.php");
?>