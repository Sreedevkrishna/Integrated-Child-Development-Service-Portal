
<?php include("admin_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>

function validate()
{
	if(document.getElementById("textfield2").value=="")
{
	document.getElementById("a").style.visibility="visible";
	flag=false;
}
else
{
	document.getElementById("a").style.visibility="hidden";
}
if(document.getElementById("textfield3").value=="")
	{
		flag=false;
		document.getElementById("b").style.visibility="visible";
	}
	else
	{
		document.getElementById("b").style.visibility="hidden";
	}
	if(document.getElementById("textfield4").value=="")
	{
		flag=false;
		document.getElementById("c").style.visibility="visible";
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
<?php
include("connect.php");

$cid=$_GET['id'];
$qry=mysql_query("SELECT * FROM `schedule` WHERE `schedule_id`='$cid'");
$row=mysql_fetch_array($qry);
?>
<form id="form1" name="form1" method="post" action="">
 <center><p> <table width="278" border="0">
    <tr>
      <td width="176" height="29">VACCINATION</td>
      <td width="86"><label for="textfield"></label>
        <label for="select"></label>
        <select name="select" id="select">
        <option value="">Select Vaccination</option>
       
      </select></td>
    </tr>
    <tr>
      <td>DATE</td>
      <td><label for="textfield2"></label>
      <input type="date" name="textfield2" id="textfield2" value="<?php echo $row['date']?>"/></td>
      <td width="299"><div id="a" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <td>VENUE</td>
      <td><label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3" value="<?php echo $row['venue']?>"/></td>
      <td width="299"><div id="b" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <td>DETAILS</td>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" value="<?php echo $row['details']?>"/></td>
      <td width="299"><div id="c" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="UPDATE" onclick="return validate()"/>
      </div></td>
    </tr>
  </table></p></center>
</form>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['button']))
{
	$vaccination=$_POST['select'];
	$date=$_POST['textfield2'];
	$venue=$_POST['textfield3'];
	$details=$_POST['textfield4'];
	$lid=mysql_insert_id();
	
	$qry=mysql_query("UPDATE `schedule` SET `date`='$date',`venue`='$venue',`details`='$details' WHERE `schedule_id`='$cid'");
	if($qry>0)
	{
		?>
        <script>
		alert("successfully Updated...");
		window.location="admin_home.php";
		</script>
        <?php

	}
	}
	?>
		
	<?php include("footer1.php")?>