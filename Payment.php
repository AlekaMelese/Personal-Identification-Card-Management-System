<?php
session_start();
if(!isset($_SESSION['username']))
		{
			header('Location: index.php');			
		}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Resident Resgitration Page:</title>
  <meta name="description" content="free website template" />
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
<div id="header" style="background-image: url(images/header11.PNG);">
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
		   
		<!--<img width="200" height="100" src="images/ad.jpg">-->
		
		<div class="sidebar">
          <div class="sidebar_item"><br><br>
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
			
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
             
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">               
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->   		
        <div class="sidebar">
          <div class="sidebar_item">
	
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	  <!-- <img width="680" height="100"src="images/reg.png" style="border-radius:10px 10px 10px 10px">-->

      <div id="content">
		 
		

<fieldset  style="margin:2% 0% 0% 20%;">
         <legend align ="center"><h3>Payment page for Resident:</h3></legend>
			<?php
			
			$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
				
			$result=mysqli_query($conn,"SELECT * FROM `pay`  WHERE Status='Notpayed' ");
			echo"<table border='1' style='margin-left: 10px;'align='center'><tr style='background-color: silver;font-size: 15.5px;height:30px;'><th>ResidentID</th><th>PaymentDate</th><th>Amount</th><th>  Reason  </th><th>Accountant</th>  <th>Update</th></tr>" ;
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['IdNo'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['IdNo']."</font></td>";
				echo"<td><font color='black'>" .$test['PaymentDate']."</font></td>";
				echo"<td><font color='black'>". $test['Amount']. "</font></td>";
				echo"<td><font color='black'>". $test['Reason']. "</font></td>";
				echo"<td><font color='black'>". $test['Accountant']. "</font></td>";	
				echo"<td> <a href ='PaymentUpdate.php?IdNo=$id'>Edit</a>";
				//echo"<td> <a href ='receipt.php?IdNo=$id'>Print</a>";
				 echo "<td><form action='receipt.php' method='POST'>
				 <input type='hidden'  value='".$test["IdNo"]."'/></form></td>";
				 
				//echo"<td> <a href ='del.php?BookID=$id'><center>Delete</center></a>";
									
				echo "</tr>";
				 ?>
		 
		 <?php	
			}	
 
	$aa=mysqli_num_rows($result);

	if($aa>0){
	echo "The Search matches and fetches the following result:";

	}
else{
	echo " These is Resident Before.";
}	
	
			
			//mysqli_close($conn);
				echo"</table>";	 
$result = mysqli_query($conn,"select count(1) FROM  `pay` WHERE Status='Notpayed'");
$row = mysqli_fetch_array($result);
$total = $row[0];
echo " <b> Total Unpayed Residents= </b>" . $total.".";			
			?>
</fieldset>

	<br><br>
<fieldset style="max-width:68%;margin:2% 5% 4% 20%;"><br>
<legend>Please do not forget to take Receipt after Payment!!</legend>
<form action="receipt.php" method="GET">    
	<tr>
    <td height="38"><font color="black">Id No:</font>
        <input type="search" name="text">
        <input type="submit" class="btn btn-info" value="Give Receipt" name="search"></td>
    </tr>	
</form>

</fieldset><br>  
	</div><!--close content-->	

	</div><!--close site_content--> 
  </div><!--close main-->
	</div><!--close content-->   
	</div><!--close site_content--> 
  </div><!--close main-->
  
  <div id="footer_container">
    <div id="footer">
	  <p>&copy All Right Reserved</p>
    </div><!--close footer-->  
  </div><!--close footer_container--> 	
  
</body>
</html>



 
	  