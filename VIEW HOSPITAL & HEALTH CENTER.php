<?php include("admin_header.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
                var url="ajax_hos.php"
                url +="?type=" +mid2
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("hos").innerHTML=xmlHttp.responseText 
                   //document.getElementById("course").value=xmlHttp.responseText
                  //alert(xmlHttp.responseText);
                }
            } 
        </script>
</head>
<style>
.sre{
	font-family:"Arial Black", Gadget, sans-serif;
	color:#000;
	}
	.dev{
		color:#0CF;
		font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
		}
</style>
<body>
  <center><h3 class="sre">HOSPITAL AND HEALTHCENTER DETAILS</h3> 
<form id="form1" name="form1" method="post" action="">
  <p><table width="200" border="1" class="dev">
    <tr>
      <td>TYPE</td>
      <td><label for="select"></label>
        <div align="right">
          <select name="select" id="select" onchange="shows(this.value)">
          <option value="" class="dev">Select</option>
            <option value="HOSPITAL">HOSPITAL</option>
            <option value="HEALTH CENTER">HEALTH CENTER</option>
          </select>
      </div></td>
    </tr>
      </table></p></center>
   
  <p>&nbsp;</p>
  <div id="hos"></div>
</form>
</body>
</html>
<?php include("footer1.php")?>