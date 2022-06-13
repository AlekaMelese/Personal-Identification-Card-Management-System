<?php
session_start();
if(!isset($_SESSION['valid']))
		{
			header('Location: index.php');			
		}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Administrator Page</title>
  <meta name="description" content="AKMS" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>

<body>
<div>
  <div id="main">
    <div id="header" style="background-image: url(images/header.PNG);">
	  <div id="banner">
	    <div id="welcome" >
	  </div><!--close welcome-->
	    <div id="welcome_slogan">
	    </div><!--close welcome_slogan-->	
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menu_container">
	  <div id="menubar">
        <ul id="menu">
		  <li><a href="resident.php">Register</a></li>
          <li><a href="pay.php">ID Payment</a></li>
		  <li><a href="id.php">Give ID Card</a></li>	
          <li><a href="certificate.php">Certificate</a></li>
		  <li><a href="report.php">Report</a></li>
		  <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->
  
<div id="site_content">
	
	  	  <div class="sidebar_container"><br>
		<img width="200" height="100" src="images/ad.jpg"/>
		<div class="sidebar">
          <div class="sidebar_item"><br><br>
            <a href="ddd.php"><b>Delete Resident</a></h2><br><br><br> 
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
			<a href="update resident.php"><b>Update Resident</a></h2><br><br><br>
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <a href="sss.php"><b>Search Resident</a></h2><br><br><br>   
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->    
		<div class="sidebar">
          <div class="sidebar_item">               
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item"><br><br><br><br><br>
		  
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->

	   <br>   
	   <img width="640" height="160" src="images/imm.jpg" style="max-width:75%;margin:2% 0% 0% 6%;">
		<br><br>
		<div id="content">
        <div class="content_item"><br><br><br>
		<img width="640" height="240"src="images/aaaa.jpg" style="max-width:75%;margin:4% 0% 0% 6%;">			  
	    </div><br><br><br>	 			 
		</div><!--close content-->  
<fieldset style="max-width:32%;margin:2% 0% 0% 6%;"><br>
<form action="sss.php" method="GET">    
	<tr>
    <td height="38"><font color="black">Search Resident:</font>
        <input type="search" name="text"/>
        <input type="submit" class="btn btn-info" value="View" align="center" name="search"/></td>
    </tr><br><br>	
</form></fieldset>	   
	</div><!--close site_content-->   
  </div><!--close main-->
  <div id="footer_container">
    <div id="footer">
	  <p> Kebele, Adigrat, Ethiopia</p></div>
    </div><!--close footer-->  
  </div><!--close footer_container-->  
  
</body>
</html>