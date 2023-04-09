<?php include("staff_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">'

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<style>
.content-table{
  border-radius:5px 5px 0 0;
  overflow:hidden;
  box-shadow:20px 20px 20px rgba(0,0,0,0.15);
  width: 80%;
  margin:20px;
  text-align: center;
  border-color: #fff;
  }
.content-table thead{
  margin:35px 0;
  border-radius: 30px;
  color:#FFF;
  border-collapse:collapse;
  
  font-size:0.5cm;
  min-width:100px;
  border-radius:5px 5px 0 0;
  overflow:hidden;
  box-shadow:0 0 20px rgba(0,0,0,0.15);
  border-bottom-style:solid;
   
     table-layout: fixed;
 
}
.content-table thead tr {
  background-color:#09F;
  text-align:left;

color:#FFF;
  font-family:Georgia, "Times New Roman", Times, serif;
  font-weight:bold;
}
.content-table td{
  text-align:left;
  font-family:"Times New Roman", Times, serif;
  color:#009879;
}
.content-table th,
.content-table td{
  padding: 4px 15px;
}
.content-table tbody tr{
  border-bottom: 2px solid #CCC;
}
.content-table tbody tr:nth-of-type(even){
  background-color:#FFF;
}
.content-table tbody tr:nth-of-type(odd){
  background-color:#EBEBEB;
}

.content-table tbody tr:last-of-type{
  border-bottom:2px solid #0FF;
}
.dev{

width: 1%;
align-items: center;
}

</style>
<body bgcolor="#00FF66">
<form id="form1" name="form1" method="post" action="">
 <CENTER><P> <table width="200" border="1" background="images/pic01.jpg" class="content-table">
    <tr>
      <th colspan="3" scope="row">VACCINATION  
        <label for="select"></label>
        <select name="select" id="select">
      
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
        </select></th>
    </tr>  
          <?php
	session_start();
    $lid=$_SESSION['lid'];
	$qry=mysql_query("SELECT * FROM `child`");
	if(mysql_num_rows($qry)>0)
	{
	?> 
    
    
    <tr>
      <th scope="row">SL.NO</th>
      <td>CHILD DETAILS</td>
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
      <td><input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $row['child_id']?>"/>
      <label for="checkbox"></label></td>
       </tr>
    <?php
	}?>
    
     <?php
	}
	else
	{
	?>
    <h1 align="center">NO DATA</h1>
    <?php
	}
	?>
    
    <tr>
      <th colspan="3" scope="row"><input type="submit" name="button" id="button" value="ADD REPORT"/></th>
    </tr>
  </table></P></CENTER>
  <?php
include("connect.php");
if(isset($_POST['button']))
{
	$vid=$_POST['select'];
	$name=$_POST['checkbox'];
	
	$cc=null;
	for($j=0;$j<sizeof($name);$j++)
	{
		$cc=mysql_query("INSERT INTO `vaccination_report`(`vaccination_id`,`child_id`,`staff_id`,`date`)VALUES('$vid','$name[$j]','$lid',curdate())");
	}
	
	if($cc>0)
	{
		?>
        <script>
		alert("successfully added...");
		window.location="staff_home.php";
		</script>
        <?php

	}
	}
	?>
</form>
</body>
</html>
<?php include("footer1.php")?>