
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
  <title>Resident Resgitration Page</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/x.css" />
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
  min-width: 180px;
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
	<li><a href="update_resident.php"> Update Resident</a></li>
    <li><a href="certificate.php">Certificate</a></li>	
    
<div class="dropdown">
  <button class="dropbtn"> Search  &#9662;</button>
  <div class="dropdown-content">   
    <a href="Searching_resident.php">ID Recived Resident </a>
    <a href="changepasswordforDC.php">ID UnRecived Resident </a>
	
  </div>
  
</div>		 
<div class="dropdown">
  <button class="dropbtn"> Report By</button>
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
          <div class="sidebar_item"><br><br><br>
	
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	   <!-- <img width="680" height="100"src="images/reg.png" style="border-radius:10px 10px 10px 10px">

-->
      <div id="content">
		 <fieldset height="10" style="margin:2% 0% 0% 20%;">
         <legend align ="center" width="420" height="20"><h3>New Resident Registration:</h3></legend>		
		 <form  action="Keb_Reg.php" method="post" enctype="multipart/form-data">
		 <table border ="0"  height="1" style="margin:2% 0% 0% 10%;">
		 <?php
			$FirstName=$LastName=$GrandFatherName=$Sex=$Nationality=$PlaceOfBirth=$Region=$Zone=$Wereda=$Kebele=$dob=$HouseNo=$Age=$RegisterdBy=$Job=$Reason
			=$FirstNameE=$LastNameE=$GrandFatherNameE=$SexE=$NationalityE=$PlaceOfBirthE=$RegionE=$ZoneE=$WeredaE=$KebeleE=$dobE=
			$HouseNoE=$AgeE=$JobE=$RegisterdByE=$ReasonE="";
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if(empty($_POST["FirstName"])) 
				{
					$FirstNameE="FirstName is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["FirstName"])){
						$FirstNameE = "Please only Enter Characters!";
					}else{
						$FirstName= $_POST["FirstName"];
					}
				}									
				if(empty($_POST["LastName"])) 
				{
					$LastNameE="LastName is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["LastName"])){
						$LastNameE = "Please only Enter Characters!";
					}else{
						$LastName= $_POST["LastName"];
					}
				}	
				
				if(empty($_POST["GrandFatherName"])) 
				{
					$GrandFatherNameE="GrandFatherName is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["GrandFatherName"])){
						$GrandFatherNameE = "Please only Enter Characters!";
					}else{
						$GrandFatherName= $_POST["GrandFatherName"];
					}
				}
            if (empty($_POST["Sex"])){
					$SexE="sex required";
				}
				elseif(preg_match("/^(Female|Male)$/i",$_POST["Sex"])){
					$Sex=$_POST["Sex"];
				}else{
					$SexE="Sex required";
				}	

				if(empty($_POST["Nationality"])) 
				{
					$NationalityE="Nationality is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["Nationality"])){
						$NationalityE = "Nationality required";
					}else{
						$Nationality= $_POST["Nationality"];
					}
				}
				if(empty($_POST["PlaceOfBirth"])) 
				{
					$PlaceOfBirthE="PlaceOfBirth is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["PlaceOfBirth"])){
						$PlaceOfBirthE = "PlaceOfBirth required";
					}else{
						$PlaceOfBirth= $_POST["PlaceOfBirth"];
					}
				}
				
				if(empty($_POST["Region"])) 
				{
					$RegionE="Region is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["Region"])){
						$RegionE = "Region required";
					}else{
						$Region= $_POST["Region"];
					}
				}
				if(empty($_POST["Zone"])) 
				{
					$ZoneE="Zone is required";
				}else{
					if(!preg_match("/^[a-zA-Z0-9 ]+$/",$_POST["Zone"])){
						$ZoneE = "Zone required";
					}else{
						$Zone= $_POST["Zone"];
					}
				}
				if(empty($_POST["Wereda"])) 
				{
					$WeredaE="Wereda is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["Wereda"])){
						$WeredaE = "Wereda required";
					}else{
						$Wereda= $_POST["Wereda"];
					}
				}
				if(empty($_POST["Kebele"])) 
				{
					$KebeleE="Kebele is required";
				}else{
					if(!preg_match("/^[a-zA-Z0-9 ]+$/",$_POST["Kebele"])){
						$KebeleE = "Kebele required";
					}else{
						$Kebele= $_POST["Kebele"];
					}
				}
				
				
					if(empty($_POST["dob"])) 
				{
					$dobE="Date of Birth is required";
				}else{
			if(!preg_match("/^([1-9]|[1-2][0-9]|3[0-1])([.]|[-]|[:])([1-9]|1[0-2])([-]|[.]|[:])(19|20)([0-9]{2})+$/",$_POST["dob"])){
						$dobE = "only number & it is invalid";
					}else{
						$dob= $_POST["dob"];
					}
				}
				
				if(empty($_POST["Job"])) 
				{
					$JobE="Job is required";
				}else{
					if(!preg_match("/^[a-zA-Z0-9 ]+$/",$_POST["Job"])){
						$JobE = "only letters and  allowed";
					}else{
						$Job= $_POST["Job"];
					}
				}
				if(empty($_POST["RegisterdBy"])) 
				{
					$RegisterdByE="DataClerk Name is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["RegisterdBy"])){
						$RegisterdByE = "Please only Enter Characters!";
					}else{
						$RegisterdBy= $_POST["RegisterdBy"];
					}
				}
				if(empty($_POST["Reason"])) 
				{
					$ReasonE="Reason of giving is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["Reason"])){
						$ReasonE = "Reason required";
					}else{
						$Reason= $_POST["Reason"];
					}
				}
			}
		?>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">							 
         <tr><td>First Name:</td>
		  <td><input name="FirstName" type="text" id="FirstName"  placeholder="enter FirstName" required> <span class="message" style="color:red;">*<?php echo $FirstNameE; ?></span></td></tr>		
         <tr><td>Last Name:</td>
		 <td><input name="LastName" type="text" id="LastName"  placeholder="enter LastName" required> <span class="message" style="color:red;">*<?php echo $LastNameE; ?></span></td></tr>  
 <tr><td>GrandFatherName:</td>
		 <td><input name="GrandFatherName" type="text" id="GrandFatherName"  placeholder="Enter GrandFatherName" required> <span class="message" style="color:red;">*<?php echo $GrandFatherNameE; ?></span></td></tr>  		 
           <tr><td>Sex:</td><td>
		 <input type="radio" name="Sex" id="Male" value="Male"checked="true">Male
		  <input type="radio" name="Sex" id="Female" value="Female" >Female
		  <span class="message"style="color:red;"><?php echo $SexE; ?></span>
		  </td></tr>     
         <tr><td> Nationality:</td>
		 <td><input name="Nationality" type="text" id="Nationality"  placeholder="enter Nationality" required> <span class="message"style="color:red;">*<?php echo $NationalityE; ?></span></td>
		 </tr>
		 
		 <tr><td >Place of Birth:</td>
		 <td><input name="PlaceOfBirth" type="text" id="PlaceOfBirth"  placeholder="enter PlaceOfBirth" required> <span class="message"style="color:red;">*<?php echo $PlaceOfBirthE; ?></span></td>
         </tr>	
		 
		  <tr>
		  <td> Region:</td>
		  <td><select name="Region" type="text" id="Region">
		  <option selected="" value="">Select a region </option>
		  <option>Addis Abeba </option>		  
		  <option>Dire Dawa</option>		  
		  <option>Tigray</option>		  
		  <option>Afar</option>		  
		  <option>Amhara</option>		  
		  <option>Oromia</option>
		  <option>Benshangul Gumuz</option>		  
		  <option>Gambella</option>		  
		  <option>Harari</option>		  
		  <option>Somalia</option>
		  <option>SNNPR</option>
		  <option>Sidama</option>
		  </select>
		  </td></tr>	
		  
		  <tr><td> Zone:</td>
		  <td><input name="Zone" type="text" id="Zone"  placeholder="enter Zone" required> <span class="message" style="color:red;">*<?php echo $ZoneE; ?></span></td>
		  </tr>
		  
         <tr><td >Wereda:</td>
		 <td><input name="Wereda" type="text" id="Wereda"  placeholder="enter Wereda" required> <span class="message" style="color:red;">*<?php echo $WeredaE; ?></span></td></tr>
		 <tr><td >Kebele:</td>
		 <td><input name="Kebele" type="text" id="Kebele"  placeholder="enter Kebele" required> <span class="message" style="color:red;">*<?php echo $KebeleE; ?></span></td>
		 </tr>

		<tr>
		<td>Date Of Birth: </td>
		<td><input type="date" name="dob" id="dob" style="width:160px;"></td></tr>
		<tr><td >House no:</td>
		<td><input type="number" name="HouseNo" id="HouseNo"></td>
        </tr>	
		<tr>
		<td> Job:</td>
		<td><input name="Job" type="text" id="Job"  placeholder="enter Job" required> <span class="message" style="color:red;">*<?php echo $JobE; ?></span></td></tr>
		<tr>
		<td> Photo: </td><td>
		<input type="file" name="image" ></td>
		</tr>	
<tr>
		<td> RegisterdBY:</td>
		<td><input name="RegisterdBy" type="text" id="RegisterdBy"  placeholder="enter DataClerk" required> <span class="message" style="color:red;">*<?php echo $RegisterdByE; ?></span></td></tr>		
		 <tr>
		  <td> Reason :</td>
		  <td><select name="Reason" type="text" id="Reason">
		  <option selected="" value="">Reason of Giving </option>
		  <option>First time for giving </option>		  
		  <option>Due to Lost</option>		  
		  <option>Other</option>		  
		
		  </select>
		  </td></tr>	
		<tr><td>
        <td><input align="left" type="submit" name="btnSubmit" formnovalidate value="Register" class="btn btn-success" onClick="Submit" align="left"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input align="right"type="reset" name="Clear" class="btn btn-danger" value="Clear" /></td>
        <td>	
		<span class="style5"> </span>                            
		</td></tr>
            </table>
	        
	      </form>  
		</fieldset>	

<?php
$conn = mysqli_connect("localhost", "root", "","picms");
 
if($conn)
	mysqli_select_db($conn,'picms') or die("Could not select database");
//mysqli_select_db( "picms",$conn );
?>
<?php
 include_once("Keb_Reg1.php");
 $formErrs=false;
 if(isset($_POST["btnSubmit"])){
$FirstName=stripslashes(trim(@$_POST['FirstName']));
$LastName=stripslashes(trim(@$_POST['LastName']));
$Sex=stripslashes(trim(@$_POST['Sex']));
$Nationality=stripslashes(trim(@$_POST['Nationality']));
$PlaceOfBirth=stripslashes(trim(@$_POST['PlaceOfBirth']));
$Region=stripslashes(trim(@$_POST['Region']));
$Zone=stripslashes(trim(@$_POST['Zone']));
$Wereda=stripslashes(trim(@$_POST['Wereda']));
$Kebele=stripslashes(trim(@$_POST['Kebele']));
$dob=stripslashes(trim(@$_POST['dob']));
$HouseNo=stripslashes(trim(@$_POST['HouseNo']));
//$RegisterdBy= $_SESSION['username'];
$RegisterdBy=stripslashes(trim(@$_POST['RegisterdBy']));
//$RegisterdBy=implode($_SESSION['RegisterdBy']);
$dor=date("Y").'-'.date("m").'-'.date("d");
$Age=(int)$dor-(int)$dob; 

$PaymentDate=date("Y").'-'.date("m").'-'.date("d");
$Amount=stripslashes(trim(@$_POST['Amount']));
$Reason=stripslashes(trim(@$_POST['Reason']));
$Accountant=stripslashes(trim(@$_POST['Accountant']));
$Status=stripslashes(trim(@$_POST['Status']));

$Job=stripslashes(trim(@$_POST['Job']));

        $count= "select * from resident" ;
		 $result = mysqli_query($conn, $count);
		$i=1;
        if($count === FALSE) {
    die(mysqli_error()); // TODO: better error handling
}
	$row = mysqli_fetch_assoc($result);
		while($row=mysqli_fetch_array($result)){
			
			$i++;
			}
		if($i<10)
		$IdNo="000$i";
		else if($i<100)
		$IdNo="00$i";
		else if($i<1000)
		$IdNo="0$i";
		else 
		$IdNo="$i";	
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name = $_FILES['image']['tmp_name'];
if($image_name==''){
	echo "<script>alert('pls select img!!')</script>";
	exit();	
	}
	else
	move_uploaded_file($image_tmp_name,"photos/$image_name");
	
	echo "<img width=\"120\" height=\"120\"src='photos/$image_name'>";
	echo "<br>";   
   if(!$formErrs){  
     $Resident_register=new Resident_register();
     $Resident_register->Add($FirstName,$LastName,$GrandFatherName,$Sex,$Age,$Nationality,$PlaceOfBirth,$Region,$Zone,$Wereda,$Kebele,$dob,$HouseNo,$dor,$Job,$image_name,$RegisterdBy,$Reason);
	// $reg=new reg();
  //$Resident_register->cc($IdNo,$PaymentDate,$Amount,$Accountant,$Reason,$Status);
   }
 }
?>


<br><br><br>
<fieldset style="max-width:80%;margin:2% 2% 4% 15%;"><br>
<legend>Write First Name, Last Name or IdNo to Search Registered Residents.</legend>
<form action="" method="GET">    
	<tr>
    <td height="38"><font color="black">Name/ID</font>
        <input type="search" name="text">
        <input type="submit" class="btn btn-info" value="Search" name="search"></td>
    </tr>	
</form>
</fieldset><br>
<fieldset style="max-width:50%;margin:2% 0% 0% 10%;"><br>
<legend>List of Registered Residents.</legend>
<?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "","picms");

if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE FirstName LIKE '$text%' OR LastName LIKE '$text%' OR IdNo LIKE '$text%'";
	 $result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	echo"<table border='1' style='margin-left: 10px;'align='center'><tr style='background-color:#46b8da;font-size: 15.5px;height: 30px;'><th>ID</th><th>FName</th><th> LName</th><th>GFName</th><th>Sex</th><th>DoB</th><th>Age</th><th>PoB</th><th>Nationality</th><th>Region</th><th>Zone</th><th>Wereda</th><th>Kebele</th><th>House No</th><th>Job</th><th>DoR</th><th>RegisterdBy</th><th>Photo</th></tr>";
	
	 //$row = mysqli_fetch_assoc($result);
	
	while($row=mysqli_fetch_array($result)){	
		 echo'<tr style="font-size: 13px;"><td>'.$row["IdNo"].'</td><td>'.$row["FirstName"].'</td>
		 <td>'.$row["LastName"].'</td><td>'.$row["GrandFatherName"].'</td><td>'.$row["Sex"].'</td><td>'.$row["dob"].'</td><td>'.$row["Age"].'</td><td>'.$row["PlaceOfBirth"].'</td><td>'.$row["Nationality"].'</td><td>'.$row["Region"].'</td><td>'.$row["Zone"].'</td><td>'.$row["Wereda"].'</td><td>'.$row["Kebele"].'</td><td>'.$row["HouseNo"].'</td><td>'.$row["Job"].'</td><td>'.$row["dor"].'</td><td>'.$row["RegisterdBy"].'</td><td>'.$row["Reason"].'</td>';
		 ?>
		  <td><div align="left"><img src="<?php echo $row["image_name"];?>" width="100" height="80px"/></div></td></tr>
		 <?php	 
	}
	$aa=mysqli_num_rows($result);
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
<br><br>	<br> 
	
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



 
 		