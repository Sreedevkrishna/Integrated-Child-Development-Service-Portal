<?php include("user_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>VACCINATION & SCHEDULE  DETAILS</h1></center>
</head>
<style>
.content-table{
  border-radius:5px 5px 0 0;
  overflow:hidden;
  box-shadow:20px 20px 20px rgba(0,0,0,0.15);
  width: 80%;
  margin:40px;
  }
.content-table thead{
  margin:35px 0;
  border-radius: 30px;
  color:09F;
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
  background-color:#EEBB;
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
  border-bottom: 2px solid #FFF;
}
.content-table tbody tr:nth-of-type(even){
  background-color:#FDAAAA;
}
.content-table tbody tr:nth-of-type(odd){
  background-color:#DBAAAB;
}

.content-table tbody tr:last-of-type{
  border-bottom:2px solid #FFF;
}
.content-table a{
  color:#FFF;
 }
</style>

<body>
<form id="form1" name="form1" method="post" action="">
  <center><p><table width="200" border="10" class="content-table">
   <?php
	include("connect.php");
	$qry=mysql_query("SELECT vaccination.name,schedule.* FROM SCHEDULE INNER JOIN vaccination ON schedule.vaccination_id=vaccination.vaccination_id");
	if(mysql_num_rows($qry)>0)
	{
	?>
  <thead>
    <tr bgcolor="#00FF66" bordercolor="#333333">
      <th scope="row">SL.NO</th>
      <th>VACCINATION</th>
      <th>DATE</th>
      <th>VENUE</th>
      <th>DETAILS</th>
    </tr>
  </thead>
     <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++?></td>
       <td> <?php echo $row['name']?></td>
        <td><?php echo $row['date']?></td> 
        <td><?php echo $row['venue']?></td>
        <td><?php echo $row['details']?></td>  
     
    </tr>
    <?php
	}?>
    
  </table></p></center>
   <?php
	}
	else
	{
	?>
    <h1 align="center">NO DATA</h1>
    <?php
	}
	?>
</form>
</body>
</html>
<?php include("footer1.php")?>