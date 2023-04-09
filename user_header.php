<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Remember - Multipurpose bootstrap site template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />
 <style type="text/css">
 #intro{
		
		background-image:url(img/mom.jpg);
		}
	

  body {
	font-family: "Open Sans", Arial, sans-serif;
	
	font-size: large;
	color:#130013;
	background-position: center top;
	border-top-style:none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	background-attachment: fixed;
	background-repeat: no-repeat;
}

.blue{

background:#347fd0;

}
.news{
box-shadow: inset 0 -15px 30px rgba(0 , 0, 0, 0.4),0 5px 10px rgba(0,0,0,0.5);
width:100%;
margin: 20px auto;
overflow: hidden;
border-radius: 4px;
padding: 1px;
-webkit-user-select:none;

}
.news span{
float: center;
color: #fff;
padding: 9px;
position: relative;
top: 1%;
box-shadow: inset 0 -15px 30px rgba(0,0,0,0.4);
font: 25px 'raleway',helvetica,arial,sans-serif;
-webkit-font-smoothing: antialiased;
-webkit-user-select:none;
cursor:pointer;

}
.bt{

border-collapse:collapse;
  box-shadow:20px 20px 20px rgba(0,0,0,0.15);
  background:#8fc04e;
padding: 5px 20px;

}
  </style>

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
           
            
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.html"><i class="icon-tint"></i>MOTHER</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="index.html">Home</a>
                    </li>
                      
                        
                       
                    <li>
                      <a href="VIEW VACCINATION & SCHEDULE.php#services">VACCINATION AND SHEDULE</a>
                    </li>
                    
                    
                    <li>
                      <a href="user view calender.php#services">CALENDER</a>
                    </li>
                    
                    
                    <li>
                      <a href="VIEW CHECKUP.php#services">CHECKUP DETAILS</a>
                    </li>
                    <li>
                      <a href="VIEW NOTIFICATION.php#services">NOTIFICATION</a>
                    </li>
                    <li>
                      <a href="mother_change_password.php#services">CHANGE PASSWORD</a>
                    </li>
                    <li>
                      <a href="index.php">LOGOUT</a>
                    </li>

                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
   <marquee style="color: white;" onmouseover="this.stop();" onmouseout="this.start()">
<a href="VIEW NOTIFICATION.php#services" style="color: white;text-decoration: none;">
   " new notification &nbsp;&nbsp; checkup&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
   <span style="font-size: 10px;color: red;">read more..............
   </span>
   "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
 </a>
 </marquee>
<?php
   
                  
  include("connect.php");
  $qry=mysql_query("SELECT anganavady.name,notification.* FROM notification INNER JOIN anganavady ON notification.angu_lid=anganavady.anganavady_id limit 0,3");



 
?>

 
    <!-- section intro -->
    <section id="intro">


      
      <div class="intro-content">
        
        <h2>WELCOME TO MOTHER HOME PAGE</h2>
        <h3>INTEGRATED CHILD DEVELOPMENT SERVICE</h3>
        <div>
          
          <button class="bt" ><a href="data.php">info</a></button>
        </div>
      </div>
    </section>
    <!-- /section intro -->

    <div id=services>
    <br>