<?php include("hospital_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>STAFF DETAILS</h1></center>
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

<body>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <table width="538" border="10" class="content-table">
       <?php
	include("connect.php");
	session_start();
    $lid=$_SESSION['lid'];
	$qry=mysql_query("SELECT * FROM staff");
	if(mysql_num_rows($qry)>0)
	{
	?>
    <thead>
      <tr>
        <th width="141">SL NO</th>
        <th width="108">NAME</th>
        <th width="135">CONTACT</th>
        <th width="96">DOB</th>
        <th width="96">TYPE</th>
        <th width="96">    </th>
         <th width="96">    </th>
       
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
      <td><?php echo $row['phone']?></td>
      <td><?php echo $row['dob']?></td>
      
      <td><?php echo $row['type']?></td>
        
       <td><p><button class="edit"><a href="edit_staff.php?id=<?php echo $row['staff_id']?>">EDIT</a></button></td></p>
  
      <td><p><button class="delete"><a href="delete_staff.php?id=<?php echo $row['login_id']?>">DELETE</a></button></td></p>
      
    </tr>
    <?php
	}?>

      
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
  </div>
</form>
</body>
</html>
