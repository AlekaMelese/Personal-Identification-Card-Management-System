
<!DOCTYPE html>
<html>
<head>
  <title>Searching a resident</title>
  <meta name="description" content="AKMS" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style>
    ul{
        padding: 0;
        list-style: none;
        background: Bulu;
    }
    ul li{
        display: inline-block;
        position: relative;
       
        text-align: left;
		text-decoration: none;
    }
    ul li a{
        display: block;
       
     color: #fff; 
   border-radius: 7px 7px 7px 7px;
  -moz-border-radius: 7px 7px 7px 7px;
  -webkit-border: 7px 7px 7px 7px;
        text-decoration: none;
		 height: 24px;
  margin: 10px 0 0 10px;
  text-shadow: 0px -1px 0px #000;
  padding: 3px 20px 0 20px;
    }
    ul li a:hover{
     color: #1D1D1D; 
  background: pink;     
    }
    ul li ul.dropdown{
     background: pink;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */
		
    }
    ul li ul.dropdown li{
        display: block;	
		    
    }
	
	
	
/* Dropdown Button */
.dropbtn {
  background-color: #6B9BC3;
  color: white;
  padding: 14px;
  font-weight: bold;
  border: none;

   border-radius: 7px 7px 7px 7px;
  -moz-border-radius: 7px 7px 7px 7px;
  -webkit-border: 7px 7px 7px 7px;
   text-decoration: none;
		 height: 24px;
  margin: 10px 0 0 10px;
  text-shadow: 0px -1px 0px #000;
  padding: 0px 8px 0 20px;

}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  
  
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff1f1;
  min-width: 165px;
  box-shadow: 0px 8px 16px 0px rgba(15,0,0,0.2);
  

  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41; color: black;}
</style>
</head>

<body>
<div>
  <div id="main">
<div id="header" style="background-image: url(images/header11.jpg);">
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
		  <li><a href="Keb_Reg.php">Register</a></li>
     <li><a href="Payment.php">Payment</a></li>		  
	<li><a href="update_resident.php"><b>Update Resident</a></li>
    <li><a href="certificate.php">Certificate</a></li>	 
<div class="dropdown">
  <button class="dropbtn"> Search &#9662;</button>
  <div class="dropdown-content">   
    <a href="Searching_resident.php">ID Recived Resident </a>
    <a href="changepasswordforDC.php">ID UnRecived Resident </a>
	
  </div>
  
</div>		
	<div class="dropdown">
  <button class="dropbtn"> Report By &#9662;</button>
  <div class="dropdown-content">
    <a href="ReportbyNameforDL.php">Name/ID</a>
    <a href="ReportByYearforDL.php">Year </a>
    <a href="ReportBySexforDL.php">Gender </a>
  </div>
  
</div>
 <div class="dropdown">
  <button class="dropbtn"> <i class="fa fa-cog" aria-hidden="true"></i> Setting &#9662; </button>
  <div class="dropdown-content">   
     <a href="changepasswordDL.php">Change Password </a>
    <a href="ViewFeedBackDL.php">View FeedBack </a>
	<a href="logout.php">Log Out </a>
  </div>
  
</div>
		  
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->
    
	<div id="site_content">		
	  	  <div class="sidebar_container"><br>
		<img width="200" height="100" src="images/ad.jpg">
		<div class="sidebar">
          <div class="sidebar_item"><br><br>
        
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
       </div><!--close sidebar_container-->	<br>
<br><br>  
<fieldset style="max-width:50%;margin:2% 0% 0% 10%;"><br>
<legend align ="center"width="420" height="200">Write First Name, Last Name or ID NO:</legend><br>
<form action="sss.php" method="GET">    
	<tr>
    <td height="38"><font color="black">Search Resident:</font>
        <input type="search" name="text1"/>
        <input type="submit" class="btn btn-info" value="View" align="center" name="search"/></td>
    </tr><br><br>	
</form></fieldset><br><br>
<fieldset style="max-width:50%;margin:2% 0% 0% 2%;"><br>
<legend align="center">List of Registered Residents</legend>
<?php
if(isset($_GET["search"])){
$conn = mysql_connect("localhost", "root", "");
mysql_select_db( "adigrat",$conn );
	$text=$_GET["text1"];
	$sql=mysql_query("SELECT * FROM `resident` WHERE FirstName LIKE '$text%' OR LastName LIKE '$text%' OR IdNo LIKE '$text%'");
	echo mysql_error();
	echo"<table border='1' style='margin-left: 10px;'align='center'><tr style='background-color: silver;font-size: 15.5px;height: 30px;'><th>FName</th><th> LName</th><th>ID</th><th>Sex</th><th>DoB</th><th>Age</th><th>PoB</th><th>Nationality</th><th>Region</th><th>Zone</th><th>Wereda</th><th>Kebele</th><th>House No</th><th>Job</th><th>DoR</th><th>Photo</th></tr>";
	while($row=mysql_fetch_array($sql)){	
		 $Img2=$row["image_name"];
		 echo'<tr style="font-size: 13px;"><td>'.$row["FirstName"].'</td><td>'.$row["LastName"].'</td><td>'.$row["IdNo"].'</td><td>'.$row["Sex"].'</td><td>'.$row["dob"].'</td><td>'.$row["Age"].'</td><td>'.$row["PlaceOfBirth"].'</td><td>'.$row["Nationality"].'</td><td>'.$row["Region"].'</td><td>'.$row["Zone"].'</td><td>'.$row["Wereda"].'</td><td>'.$row["Kebele"].'</td><td>'.$row["HouseNo"].'</td><td>'.$row["Job"].'</td><td>'.$row["dor"].'</td>';
		 ?>
		 <td><div align="left"><img src="<?=$Img2?>" width="100" height="80px"/></div></td></tr>
		 <?php
	}
	$aa=mysql_num_rows($sql);
	if($aa>0){
	echo " The Search matches and fetches the following result";
	}
else{
	echo " The search did not match";
}	
	}	
	echo"</table>";	
?>
</fieldset>
<br><br><br><br><br>	
	  <div id="content">
        <div class="content_item">
	      </div>
		  <br style="clear:both"/>		  
		  <div class="content_container">
		  </div><!--close content_container-->
          <div class="content_container">
		  </div><!--close content_container-->			  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
 
  </div><!--close main-->
  
  <div id="footer_container">
    <div id="footer">
	  <p> Kebele, Adigrat, Ethiopia</p>
    </div><!--close footer-->  
  </div><!--close footer_container-->  
</body>
</html>


