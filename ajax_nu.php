<style>
.content-table{
	border-radius:5px 5px 0 0;
	overflow:hidden;
	box-shadow:20px 20px 20px rgba(0,0,0,0.15);
	width:80%;
	margin:40px;
	border-color:#FFF;
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
	background-color:#396;
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

	
</style>
 
      <?php
	include("connect.php");
	$angu=$_GET['angu'];
	$qry=mysql_query("SELECT `nutrition`.`nu_name`,`child`.*,`allocated_nutrition`.* FROM `allocated_nutrition`,`nutrition`,`child` WHERE `child`.`child_id`=`allocated_nutrition`.`child_id` AND `allocated_nutrition`.`nutrition_id`=`nutrition`.`nutrition_id` AND `allocated_nutrition`.`anganavady_id`='$angu'");
	if(mysql_num_rows($qry)>0)
	{
	?>
   <center> <table width="200" border="10" class="content-table">
    
    <thead>
    <tr>
    
      <th>SL.NO</th>
      <th>NUTRITION ID</th>
      <th>CHILD ID</th>
      <th>QUALITY</th>
      <th>DATE</th>
     
    </tr>
    </thead>
     <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++?></td>
      <td><?php echo $row['nu_name']?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['quantity']?></td>
       <td><?php echo $row['date']?></td>
    
    </tr>
  <?php
	}?>
  </table></center>
   
      <?php
	}
	else
	{
	?>
    <h1 align="center">NO DATA</h1>
    <?php
	}
	?>