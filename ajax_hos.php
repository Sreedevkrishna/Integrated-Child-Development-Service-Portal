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
.content-table .delete{
	border-collapse:collapse;
	box-shadow:20px 20px 20px rgba(0,0,0,0.15);
	background:#F00;
	
	}
.content-table a{
	color:#FFF;
	}
	.content-table .edit{
	border-collapse:collapse;
	box-shadow:20px 20px 20px rgba(0,0,0,0.15);
	background:#03C;
	
	}
	
</style>



 <?php
	include("connect.php");
	$type=$_GET['type'];
	$qry=mysql_query("SELECT * FROM `hospital_healthcenter` WHERE `type`='$type'");
	if(mysql_num_rows($qry)>0)
	{
	?>
 

 <center> <table width="200" border="10" class="content-table">
 <thead>
    <tr>
      <th>SL.NO</th>
      <th>NAME</th>
      <th>ADDRESS</th>
      <th>CONTACT</th>
      <th>email</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      
      
    </tr>
    </thead>
    <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['place']." , ".$row['post']." , ".$row['pin']." , ".$row['district']?></td>
      <td><?php echo $row['phone']?></td>
      <td><?php echo $row['email']?></td>   
      <td><p><button class="edit"><a href="edit_hospital.php?id=<?php echo $row['hospital_id']?>">EDIT</a></button></p></td>
     <td> <p><button class="delete"><a href="delete_hospital.php?id=<?php echo $row['login_id']?>">DELETE</a></button></p></td>
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