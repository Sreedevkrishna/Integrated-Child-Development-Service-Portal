<?php
include("connect.php");
$aid=$_GET['id'];
mysql_query("DELETE FROM `student` WHERE `student_id`='$aid'");

if($qry>0)
{
	
?>
<script>
alert("Deleted...");
window.location="VIEW STUDENT.php";
</script>
<?php
}?>