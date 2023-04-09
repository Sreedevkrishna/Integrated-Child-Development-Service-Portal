<?php include("hospital_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center><h1>DUTY ALLOCATION</h1></center>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>SCHEDULE</td>
      <td><label for="select"></label>
        <select name="select" id="select">
          <option value="">Select Vaccination Schedule</option>
           <?php
		   include("connect.php");
	
	$qry1=mysql_query("SELECT `vaccination`.*,`schedule`.* FROM `schedule`,`vaccination` WHERE `vaccination`.`vaccination_id`=`schedule`.`vaccination_id`");
	while($row1=mysql_fetch_array($qry1))
	{
	?>
          <option value="<?php echo $row1['vaccination_id']?>"><?php echo $row1['name']."--".$row1['date']?></option>
          <?php
		  }
		  ?>
      </select></td>
    </tr>
  </table>
  <div align="center"></div>
  <p>&nbsp;</p>
  <table width="200" border="1">
   <?php
	session_start();
    $lid=$_SESSION['lid'];
	//echo $lid;
	include("connect.php");
	$qry=mysql_query("SELECT * FROM `staff` WHERE `hospital_id`='$lid'");
	if(mysql_num_rows($qry)>0)
	{
	?>
   
    
    <tr>
      <td>SI.NO</td>
      <td>STAFF_NAME</td>
      <td>&nbsp;</td>
    </tr>
          <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
         
    <tr>
      <td><?php echo $i++?></td>
      <td><?php echo $row['name']?></td>
      <td><input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $row['login_id']?>"/>
      <label for="checkbox"></label></td>
       </tr>
    <?php
	}?>
<tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="button" id="button" value="ALLLOCATE" />
      </div></td>
    </tr>
      
    </table>
     <?php
	}
	else
	{
	?>
    <h1 align="center">NO DATA</h1>
    <?php
	}
	?>
    </tr>
  
  <p>&nbsp;</p>
 
</form>
<p>&nbsp;</p>
</body>
</html>


<?php
include("connect.php");
if(isset($_POST['button']))
{
	$vid=$_POST['select'];
	$staff_name=$_POST['checkbox'];
	
	$cc=null;
	for($j=0;$j<sizeof($staff_name);$j++)
	{
		$cc=mysql_query("INSERT INTO `duty_allocation`(`vaccination_id`,`login_id`)VALUES('$vid','$staff_name[$j]')");
	}
	
	if($cc>0)
	{
		?>
        <script>
		alert("successfully added...");
		window.location="health_home.php";
		</script>
        <?php

	}
	}
	?>
	<?php include("footer1.php")?>