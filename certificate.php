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
  <title>Certificate Giving Page</title>
  <meta name="description" content="AKMS" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <meta charset="utf-8">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
  <button class="dropbtn"> Search &#9662;  </button>
  <div class="dropdown-content">   
    <a href="Searching_resident.php">ID Recived Resident </a>
    <a href="changepasswordforDC.php">ID UnRecived Resident </a>
	
  </div>
  
</div>		 
	<div class="dropdown">
  <button class="dropbtn"> Report By &#9662;</button>
  <div class="dropdown-content">
    <a href="report.php">Name/ID</a>
    <a href="ReportbyYear.php">Year </a>
    <a href="ReportbySex.php">Gender </a>
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
	</nav>
  
<div id="site_content">

	  	  <div class="sidebar_container"><br>
		
		 
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
          <div class="sidebar_item"><br><br><br>
		  
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->

	 
		<div id="content">
		 <form  action="certificate.php" method="post"><br>
		 <fieldset style="margin:2% 0% 0% 18%;">
         <legend align ="center">Certification Registration Form:</legend><br>
		 <table>
		 <tr><td>First Name:</td>
         <td><input name="FirstName" type="text" id="FirstName" pattern="[a-zA-Z\s]+"></td></tr>
		 <tr>
         <td>Last Name:</td>
         <td> <input name="LastName" type="text" id="LastName" pattern="[a-zA-Z\s]+"></td>
		 </tr>
		 <tr>
		 <td >Subject:</td>
		 <td><textarea style="margin: 0px; width: 442px; height: 150px;" name="Subject" value="Subject" pattern="[a-zA-Z\s]+"></textarea></td>
		 </tr>
		<tr><td>
		<td>
        <input type="submit" name="btnSubmit" formnovalidate value="Register" class="btn btn-success"onClick="Submit" align="left"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="Clear" value="Clear" class="btn btn-danger" /></td>	
		 </tr>
		 <td>
		 <span class="style5"> </span>                            
		 </td>
            </table>
	        </fieldset>
	      </form>	  
<fieldset style="max-width:50%;margin:2% 5% 4% 25%;">
<?php

$conn= mysqli_connect("localhost","root","") or die("Unable to connect");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
if(isset($_POST["btnSubmit"])){
$FirstName=@$_POST['FirstName'];
$LastName=@$_POST['LastName'];
$Date=date("Y").'-'.date("m").'-'.date("d");
$IdNo=@$_POST['IdNo'];
$Subject=@$_POST['Subject'];
	if($FirstName=='' || $LastName=='' || $Subject==''){
	echo "<script>alert('Please Fill All the Forms!!')</script>";
	exit();
}
$result=mysqli_query($conn,"INSERT INTO certificate (FirstName,LastName,Date,Subject)VALUES
('$FirstName','$LastName','$Date','$Subject')");
if($result)
{
	echo"$FirstName $LastName is now Registered for Certificate";
}
else
{
echo"Error".mysqli_error($conn);
}
}
?>
</fieldset>
<!--
<fieldset style="max-width:75%;margin:2% 5% 4% 25%;"><br>
<form action="" method="GET">    
	<tr>
    <td height="38"><font color="black">Search Certified:</font>
        <input type="search" name="text">
        <input type="submit" class="btn btn-info" value="Search" name="search"></td>
    </tr>	
</form>
</fieldset> -->
<fieldset style="max-width:50%;margin:4% 5% 4% 25%;">
<legend>Certified Residents</legend>

<?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
$sql=mysqli_query($conn,"SELECT * FROM `certificate` ");
	echo mysqli_error($conn);
	echo"<table border='1' style='margin-left: 10px;'align='center'><tr style='background-color: silver;font-size: 15.5px;height: 30px;'><th>ID Number</th><th>First Name</th><th> Last Name</th><th>Certified Date</th></tr>";
	while($row=mysqli_fetch_array($sql)){
		
	echo'<tr style="font-size: 13px;"><td>'.$row["IdNo"].'</td><td>'.$row["FirstName"].'</td><td>'.$row["LastName"].'</td><td>'.$row["Date"].'</td></tr>';
	}
	$aa=mysqli_num_rows($sql);
	if($aa>0){
	echo " The Search matches and fetches the following result";
	}
else{
	echo " The search did not match";
}	
	}	
	echo"</table>";	
?>

</fieldset><br>
<fieldset style="max-width:60%;margin:2% 5% 4% 25%;"><br>
<form action="certify.php" method="GET">    
	<tr>
    <td height="38"><font color="black">Write ID No:</font>
        <input type="search" name="text">
        <input type="submit" class="btn btn-success" value="Certify" name="search"></td>
    </tr>	
</form>
</fieldset><br><br><br>
</div><!--close content-->
	</div><!--close site_content-->   
  </div><!--close main-->
  <div id="footer_container">
    <div id="footer">
	  <p> &copy All Right Reserved</p></div>
    </div><!--close footer-->  
  </div><!--close footer_container-->  
  
</body>
</html>