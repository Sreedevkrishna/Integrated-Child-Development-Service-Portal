<?php
include ("hospital_header.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function validate()
{
	var flag=true;
	if(document.getElementById("a1").value=="")
	{
		document.getElementById("a").style.visibility="visible";
		flag=false;
	}
	else
	{
		document.getElementById("a").style.visibility="hidden";
	}
	if(document.getElementById("b1").value=="")
	{
		document.getElementById("b").style.visibility="visible";
		flag=false;
	}
	else
	{
		document.getElementById("b").style.visibility="hidden";
	}
	
	if(document.getElementById("c1").value!=document.getElementById("b1").value)
	{
		document.getElementById("c").style.visibility="visible";
		flag=false;
	}
	else
	{
		document.getElementById("c").style.visibility="hidden";
	}
	
	return flag;
}
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="479" height="311" border="0" align="center">
    <tr>
      <td width="180">Current Password</td>
      <td width="132"><label for="textfield"></label>
      <input type="password" name="textfield" id="a1" /></td>
      <td width="153"><div id="a" style="visibility:hidden" align="center"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><label for="textfield2"></label>      <input type="password" name="textfield2" id="b1" /></td>
      <td width="153"><div id="b" style="visibility:hidden" align="center"><font color="#FF0000">Invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td>Confirm password</td>
      <td><label for="textfield3"></label>
      <input type="password" name="textfield3" id="c1" /></td>
      <td width="153"><div id="c" style="visibility:hidden" align="center"><font color="#FF0000">not matching!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="kk" id="button" value="Change" onclick="return validate()" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>

<?php
include("connect.php");
session_start();
$lid=$_SESSION['lid'];
if(isset($_POST['kk']))
{
	$c_pass=$_POST['textfield'];
	$n_pass=$_POST['textfield2'];
	$confirm_pass=$_POST['textfield3'];
	$qry=mysql_query("SELECT * FROM `login` WHERE `login_id`='$lid'");
	if(mysql_num_rows($qry)>0){
		$row=mysql_fetch_array($qry);
		if($c_pass == $row['password'])
		{
			$ch=mysql_query("UPDATE `login` SET `password`='$n_pass' WHERE `login_id`='$lid'");
			if($ch>0)
			{
				?>
        			<script>
					alert("Suceessfully updated...");
					window.location="index.php";
					</script>
        		<?php
			}
		}else{
		?>
        <script>
			alert("Current password is invalid..");
					window.location="index.php";
		</script>
        <?php	
		}
	}
}
?>

<?php
include ("footer.php")
?>