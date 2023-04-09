<?php include("admin_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center><h1>NUTRITION DETAILS</h1></center>
<script type="text/javascript">

 var xmlHttp;
            function shows(mid2){
               // alert(mid2);
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    //alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="ajax_nu.php"
                url +="?angu=" +mid2
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("nu").innerHTML=xmlHttp.responseText 
                   //document.getElementById("course").value=xmlHttp.responseText
                  //alert(xmlHttp.responseText);
                }
            } 
        </script>
</head>
<style>
.content-table{
  border-radius:5px 5px 0 0;
  overflow:hidden;
  box-shadow:20px 20px 20px rgba(0,0,0,0.15);
  
  margin:40px;
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
.sre{
		font-family:"Comic Sans MS", cursive;
		color:#666;
		}
</style>

<body>
<form id="form1" name="form1" method="post" action="">

<center><h3 class="sre">nutrition details</h3>
<table width="200" border="0" class="content-table">
  <tr>
    <td>Anganavady</td>
    <td><label for="select"></label>
      <select name="select" id="select" onchange="shows(this.value)">
      <option value="">Select Anganavady</option>
      <?php
	include("connect.php");
	$qry=mysql_query("SELECT * FROM `anganavady`");
	while($row=mysql_fetch_array($qry))
	{
	?>
     <option value="<?php echo $row['login_id']?>"><?php echo $row['name']?></option>
     <?php
	}?>
      </select></td>
  </tr>
</table></center>

 <p>
 </p>
 <div id="nu"></div>
    
    
</form>
</body>
</html>
<?php include("footer1.php")?>