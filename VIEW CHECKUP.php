<?php include("user_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>CHECKUP  DETAILS</h1></center>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <?php
	include("connect.php");
	$qry=mysql_query("SELECT child.name,checkup.* FROM checkup  JOIN child ON checkup.child_id=child.child_id");
	if(mysql_num_rows($qry)>0)
	{
	?>
    <tr>
      <th scope="row">SL.NO</th>
      <td>CHILD </td>
      <td>DATE</td>
      <td>RESULT</td>
    </tr>
        <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++?></td>
       <td> <?php echo $row['name']?></td>
        <td><?php echo $row['date']?></td> 
         <td><?php echo $row['result']?></td> 
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
    
</form>
</body>
</html>
<?php include("footer1.php")?>