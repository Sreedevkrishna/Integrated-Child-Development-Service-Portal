<?php
include("connect.php");
$aid=$_GET['id'];
mysql_query("DELETE FROM `vaccination` WHERE `vaccination_id`='$aid'");

if($qry>0)
{
	
?>
<script>
alert("Deleted...");
window.location="VIEW VACCINATION.php";
</script>
<?php
}?>