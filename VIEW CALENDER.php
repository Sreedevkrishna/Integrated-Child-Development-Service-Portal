<?php include("admin_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>CALENDER</h1></center>
</head>
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
	background-color:#009879;
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

.content-table a{
	color:#FFF;
	}
	.content-table .edit{
	border-collapse:collapse;
	box-shadow:20px 20px 20px rgba(0,0,0,0.15);
	background:#03C;
	
	}
	.sre{
		font-family:"Comic Sans MS", cursive;
		color:#666;
		}
</style>

<body>
<form id="form1" name="form1" method="post" action="">
<center>
<h3 class="sre">calender details</h3>

<p> <table width="200" border="10"  class="content-table">
    <tr>
      <th scope="row">SL.NO</th>
      <td>SUBJECT</td>
      <td>MESSAGE</td>
    </tr>
    <tr>
      <th scope="row"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></th>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" /></td>
      <td><label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3" /></td>
    </tr>
  </table></p></center>
</form>
</body>
</html>
<?php include("footer1.php")?>