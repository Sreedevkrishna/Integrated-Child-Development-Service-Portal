<?php
include("connect.php");
$aid=$_GET['id'];
mysql_query("DELETE FROM `hospital_healthcenter` WHERE `login_id`='$aid'");
$qry=mysql_query("DELETE FROM `login` WHERE `login_id`='$lid'");
if($qry>0)
{
	
?>
<script>
alert("Deleted...");
window.location="ajax_hos.php";
</script>
<?php
}?>