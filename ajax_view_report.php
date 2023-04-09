
<?php
	include("connect.php");
	$lid=$_GET['lid'];
	$qry=mysql_query("SELECT `child`.`name`AS cname,`vaccination`.`name` AS vname,`vaccination_report`.* FROM `vaccination_report`,`child`,`vaccination` WHERE `vaccination`.`vaccination_id`=`vaccination_report`.`vaccination_id` AND `vaccination_report`.`child_id`=`child`.`child_id` AND `vaccination_report`.`staff_id`='$lid'");
	if(mysql_num_rows($qry)>0)
	{
	?>
    
 <table width="451" border="1">
            <tr>
              <th width="47" scope="row">SL.NO</th>
              <td width="123">CHILD NAME</td>
              <td width="69">DATE</td>
              <td width="184">VACCINATION</td>
            </tr>
           <?php
	$i=1;
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td><?php echo $i++?></td>
              <td><?php echo $row['cname']?></td>
              <td><?php echo $row['date']?></td>
              <td><?php echo $row['vname']?></td>
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