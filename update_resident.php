
<?php
session_start();
if(!isset($_SESSION['username']))
		{
			header('Location: index.php');		
 die();			
		}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Updating a resident</title>
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
          <div class="sidebar_item"><br><br><br><br><br>
		  
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
<fieldset style="max-width:50%;margin:2% 0% 0% 10%;"><br>
<legend align ="center"width="420" height="200">Write the IdNo and Click on Search</legend><br>
<form action="update_resident.php" method="GET">    
	<tr>
    <td height="38"><font color="black"> ID No:</font>
        <input type="search" name="text"/>
        <input type="submit" class="btn btn-info" value="Search" align="center" name="update"/></td>
    </tr><br><br>	
</form><br>
<form action="update_resident.php" method="GET">    
<?php
if(isset($_GET["update"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql=mysqli_query($conn,"SELECT * FROM `resident` WHERE FirstName LIKE '$text%' OR LastName LIKE '$text%' OR IdNo LIKE '$text%'");
	echo mysqli_error($conn);
	echo"<table border='0'>";
	while($row=mysqli_fetch_array($sql)){
		$Img2=$row["image_name"];
	echo'<tr>
	<tr><td>FirstName</td><td><input type=search id=FirstName name=FirstName value='.$row["FirstName"].'></td></tr>
	<tr><td>LastName</td><td><input type=text id=LastName name=LastName value='.$row["LastName"].'></td>	</tr>
	<tr><td>GrandFatherName</td><td><input type=text id=GrandFatherName name=GrandFatherName value='.$row["GrandFatherName"].'></td>	</tr>
	<tr><td>IdNo</td><td><input type=text id=IdNo name=IdNo value='.$row["IdNo"].'></td></tr>
	 <tr><td>Sex:</td><td>
		 <input type="radio" name="Sex" id="Male" value="Male" checked="True">Male
		  <input type="radio" name="Sex" id="Female" value="Female" checked="True">Female
		  <span class="message"style="color:red;"><?php echo $SexE; ?></span>
		  </td></tr> 
	<tr><td>dob</td><td><input type=text id=dob name=dob value='.$row["dob"].'></td></tr>	
	<tr><td>Age</td><td><input type=text id=Age name=Age value='.$row["Age"].'></td></tr>	
	<tr><td>PlaceOfBirth</td><td><input type=text id=PlaceOfBirth name=PlaceOfBirth value='.$row["PlaceOfBirth"].'></td>	</tr>
	<tr><td>Nationality</td><td><input type=text id=Nationality name=Nationality value='.$row["Nationality"].'></td>	</tr>
	<tr><td>Region</td><td><select name=Region id=Region >
	<option>'.$row["Region"].'</option>
		  <option>Addis Abeba City Admin</option>		  
		  <option>Dire Dawa City Admin</option>		  
		  <option>Tigray</option>		  
		  <option>Afar</option>		  
		  <option>Amhara</option>		  
		  <option>Oromia</option>
		  <option>Benshangul Gumuz</option>		  
		  <option>Gambella</option>		  
		  <option>Harari</option>		  
		  <option>Somalia</option>
		  <option>SNNPR</option>
          <option>Sidama</option>		  </select></td>	</tr>
	<tr><td>Zone</td><td><input type=text id=Zone name=Zone value='.$row["Zone"].'></td></tr>	
	<tr><td>Wereda</td><td><input type=text id=Wereda name=Wereda value='.$row["Wereda"].'></td></tr>	
	<tr><td>Kebele</td><td><input type=text id=Kebele name=Kebele value='.$row["Kebele"].'></td></tr>	
	<tr><td>HouseNo</td><td><input type=text id=HouseNo name=HouseNo value='.$row["HouseNo"].'></td></tr>	
	<tr><td>Job</td><td><input type=text id=Job name=Job value='.$row["Job"].'></td></tr>	
	<tr><td>dor</td><td><input type=text id=dor name=dor value='.$row["dor"].'></td></tr>	
	<tr><td>Photo</td><td><input type=file id=image_name name=image_name value='.$row["image_name"].'></td></tr>
	<tr><td>RegisterdBy</td><td><input type=text id=RegisterdBy name=RegisterdBy value='.$row["RegisterdBy"].'></td></tr>
	<tr><td>Reason</td><td><select name=Reason id=Reason >
	<option>'.$row["Reason"].'</option>
		  <option>Due to Lost</option>		  
		  <option>Other</option>		  </select></td>	</tr>
		
	<tr><td>Status</td><td><input type=text id=Status name=Status value='.$row["Status"].'></td></tr>';

	}
	echo"</table>";
}
?><tr><td></td><td>
	<input align="center" type="submit" style="margin-left: 145px;"name="btnSubmit" value="Update" class="btn btn-success" onClick="Submit" align="left"/></td><td>
	<input align="center"type="reset" name="Clear" class="btn btn-danger" value="Clear" />	</td></tr>
	
</form>
<br><br>
<?php
if(isset($_GET["btnSubmit"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
    $id=$_GET["IdNo"];
	$FirstName=$_GET["FirstName"];
	$LastName=$_GET["LastName"];
	$GrandFatherName=$_GET["GrandFatherName"];
	$Sex=$_GET["Sex"];
	$dob=$_GET["dob"];
	$Age=$_GET["Age"];
	$PlaceOfBirth=$_GET["PlaceOfBirth"];
	$Nationality=$_GET["Nationality"];
	$Region=$_GET["Region"];
	$Zone=$_GET["Zone"];
	$Wereda=$_GET["Wereda"];
	$Kebele=$_GET["Kebele"];
	$HouseNo=$_GET["HouseNo"];
	$Job=$_GET["Job"];
	$dor=$_GET["dor"];
	$Img2=$_GET["image_name"];
	$RegisterdBy=$_GET["RegisterdBy"];
	$Reason=$_GET["Reason"];
	$Status=$_GET["Status"];	
	$ss=mysqli_query($conn,"UPDATE resident SET FirstName='$FirstName', LastName='$LastName',GrandFatherName='$GrandFatherName', Sex='$Sex', 
	dob='$dob', Age='$Age', PlaceOfBirth='$PlaceOfBirth', Nationality='$Nationality', Region='$Region', 
	Zone='$Zone', Wereda='$Wereda', Kebele='$Kebele', HouseNo='$HouseNo', Job='$Job', 
	dor='$dor', image_name='photos/$Img2', RegisterdBy='$RegisterdBy',Reason='$Reason',Status='$Status' where IdNo= $id ");
	
    
if($ss){
	echo "You Have Successfully Updated!!";
}
else{
	echo "Update Failed!!";
}
$aa=mysqli_query($conn,"UPDATE pay SET Reason='$Reason', Status='Notpayed' WHERE IdNo= $id ");
	  //$conn->query($aa);
echo mysqli_error($conn);
}
?>
</fieldset>
	
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
	  <p> Kebele, BahirDar, Ethiopia</p>
    </div><!--close footer-->  
  </div><!--close footer_container-->  
</body>
</html>