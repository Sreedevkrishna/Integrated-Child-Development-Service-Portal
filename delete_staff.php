<?php
include("connect.php");
$aid=$_GET['id'];
mysql_query("DELETE FROM `staff` WHERE `login_id`='$aid'");
$qry=mysql_query("DELETE FROM `login` WHERE `login_id`='$lid'");
if($qry>0)
{
	
?>
<script>
alert("Deleted...");
window.location="VIEW STAFF.php";
</script>
<?php
}?>