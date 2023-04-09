<?php include("angu_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>ADD  CHECKUP </h1></center>
<script>
function validate()
{

if(document.getElementById("textfield").value=="")
{
	document.getElementById("a").style.visibility="visible";
	flag=false;
}
else
{
document.getElementById("a").style.visibility="hidden";
}

	if(document.getElementById("textfield").value=="")
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
<form id="form1" name="form1" method="post" action="">
<center><p> <table width="200" border="0" background="images/pic01.jpg">
  <tr>
    
      <tr>
        <th scope="row">CHILD</th>
        <td><label for="select"></label>
          <select name="select" id="select">
          <option value="">Select Child</option>
         <?php
	include("connect.php");
	$qry=mysql_query("SELECT * FROM child");
	while($row=mysql_fetch_array($qry))
	{
	?>
    <option value="<?php echo $row['child_id']?>"><?php echo $row['name']?></option>
    <?php
	}
	?>
          </select></td>
      </tr>
      <tr>
        <th scope="row">DATE</th>
        <td><label for="textfield"></label>
          <input type="date" name="textfield" id="textfield" /></td>
           <td><div id="a" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
      </tr>
      <tr>
        <th scope="row">RESULT</th>
        <td><label for="textfield2"></label>
          <input type="text" name="textfield2" id="textfield2" /></td>
           <td><div id="b" style="visibility:hidden"><font color="#FF0000">Invalid entry!!</font></div></td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="ADD"  onclick="return validate()"/> </th>
      </tr>
    </table></p></center>
</form>
</body>
</html><?php
include("connect.php");
if(isset($_POST['button']))
{
	$child=$_POST['select'];
	$date=$_POST['textfield'];
    $result=$_POST['textfield2'];
	$qry=mysql_query("INSERT INTO `checkup`(`child_id`,`date`,`result`)VALUES('$child','$date','$result')");
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