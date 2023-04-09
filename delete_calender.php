<?php
include("connect.php");
$aid=$_GET['id'];
mysql_query("DELETE FROM `calender` WHERE `calender_id`='$aid'");

if($qry>0)
{
	
?>
<script>
alert("Deleted...");
window.location="CALENDER VIEW.php";
</script>
<?php
}?>