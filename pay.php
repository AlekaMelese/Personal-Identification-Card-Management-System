<?php
session_start();
if(!isset($_SESSION['valid']))
		{
			header('Location: index.php');			
		}
?>
<!DOCTYPE html>
<head>
  <title>Payment Page</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script> 
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
          <li><a href="pay.php">ID Registration</a></li>
		  <li><a href="id.php">Print ID Card</a></li>	
          <li><a href="certificate.php">Certificate</a></li>
		  <li><a href="report.php">Report</a></li>
	
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->	
	
	<div id="site_content">	
	  	  <div class="sidebar_container"><br>
		    <li><a href="logout.php">Log Out</a></li>
		<img width="200" height="100" src="images/ad.jpg">
			
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
       </div><!--close sidebar_container-->	<br>
	   	 <div id="content">		 
		 <fieldset width="400" height="200" style="max-width:100%;margin:2% 0% 0% 20%;">
		 <legend align ="center" width="360" height="200"><h3>Register and Pay for ID </h3></legend><br>
		 <form  action="pay.php" method="post" enctype="multipart/form-data">
		 <table border ="0" width="420" height="200" style="max-width:75%;margin:2% 0% 0% 10%;">
		 
         <tr><td>First Name:</td>
		 <td><input name="FirstName" type="text" id="FirstName" pattern="[a-zA-Z\s]+" ></td></tr>
         <tr><td>Last Name:</td>
		 <td><input name="LastName" type="text" id="LastName" pattern="[a-zA-Z\s]+"></td></tr>
      
          <tr><td>Sex:</td> 
		  <td><select name="Sex" type="text" id="Sex">
		  <option selected="" value="default">Please select a Gender </option>	
		  <option>Male</option>
		  <option>Female</option></select>
          </td></tr>

         
         <tr><td> Nationality:</td>
		 <td><input selected="" name="Nationality" type="text" id="Nationality" pattern="[a-zA-Z\s]+"></td></tr>
		 <tr><td >Place of Birth:</td>
		 <td><input type="text" name="PlaceOfBirth" id="PlaceOfBirth" pattern="[a-zA-Z\s]+"></td>
         </tr>	
		 
		  <tr>
		  <td> Region:</td>
		  <td><select name="Region" type="text" id="Region">
		  <option selected="" value="default">Please select a region </option>
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
		  <option>SNNPR</option></select></td></tr>		  
		  <tr><td> Zone:</td>
		  <td><input name="Zone" type="text" id="Zone"></td>
		  </tr>
		  
         <tr><td >Wereda:</td>
		 <td><input type="text" name="Wereda" id="Wereda" pattern="[a-zA-Z\s]+"></td></tr>
		 <tr><td >Kebele:</td>
		 <td><input type="text" name="Kebele" id="Kebele" pattern="[a-zA-Z\s]+"></td></tr>
		 
		<tr><td>Date Of Birth: </td>
		<td><input type="date" name="dob" id="dob"></td></tr>
		<tr><td >House no:</td>
		<td><input type="number" name="HouseNo" id="HouseNo"></td>
        </tr>	
		<tr>
		<td> Job:</td>
		<td><input name="Job" type="text" id="Job" pattern="[a-zA-Z\s]+"></td></tr>
		
		 <tr><td >Amount(Br):</td>
		 <td><input type="number" name="Amount" id="Amount"></td></tr>
		 <tr><td >Reason:</td>
		 <td><input type="text" name="Reason" id="Reason" pattern="[a-zA-Z\s]+"></td></tr>
		 
		<tr><td>Accountant: </td>
		<td><input type="text" name="Accountant" id="Accountant" pattern="[a-zA-Z\s]+"></td></tr>
		
		<tr>
		<td> Photo: </td><td>
		<input type="file" name="image" ></td>
		</tr>
		<tr><td>
        <td><input align="left" type="submit" name="btnSubmit" value="Pay" class="btn btn-success" onClick="Submit" align="left"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input align="right"type="reset" name="Clear" class="btn btn-danger" value="Clear" /></td>
        <td>	
		<span class="style5"> </span>                            
		</td></tr>
            </table>
	        
	      </form>  
		</fieldset>	
<fieldset style="max-width:50%;margin:2% 0% 0% 20%;">
<?php
echo "Registration Status<br>";
$a= mysql_connect("localhost","root","") or die("Unable to connect");
mysql_select_db('adigrat') or die("Unable to select db");
if(isset($_POST["btnSubmit"])){
$FirstName=@$_POST['FirstName'];
$LastName=@$_POST['LastName'];
$Sex=@$_POST['Sex'];
$Nationality=@$_POST['Nationality'];
$PlaceOfBirth=@$_POST['PlaceOfBirth'];
$Region=@$_POST['Region'];
$Zone=@$_POST['Zone'];
$Wereda=@$_POST['Wereda'];
$Kebele=@$_POST['Kebele'];
$dob=@$_POST['dob'];
$HouseNo=@$_POST['HouseNo'];
$dog=date("Y").'-'.date("m").'-'.date("d");
$Age=$dog-$dob;
$Job=@$_POST['Job'];
$Amount=@$_POST['Amount'];
$Reason=@$_POST['Reason'];
$Accountant=@$_POST['Accountant'];
$count=mysql_query("select * from pay");
		$i=1;
		while($row=mysql_fetch_array($count)){$i++;}
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
	$pic="photos/$image_name";

	echo "<img width=\"120\" height=\"120\"src='photos/$image_name'>";
	echo "<br>";
	if($FirstName=='' || $LastName=='' || $Sex=='' || $Nationality=='' || $PlaceOfBirth=='' || $Region=='' || $Zone=='' || $Wereda=='' || $Kebele=='' || $dob=='' || $HouseNo=='' || $Job=='' || $Amount=='' || $Reason=='' || $Accountant=='' ){
	echo "<script>alert('Please Fill All the Forms!!')</script>";
	exit();
}
		$result=mysql_query("INSERT INTO pay (FirstName,LastName,Sex,Age,Nationality,PlaceOfBirth,Region,Zone,Wereda,Kebele,dob,HouseNo,dog,Job,IdNo,Amount,Reason,Accountant,image_name)VALUES
		('$FirstName','$LastName','$Sex','$Age','$Nationality','$PlaceOfBirth','$Region','$Zone','$Wereda','$Kebele','$dob','$HouseNo','$dog','$Job','$IdNo','$Amount','$Reason','$Accountant','$pic')");
		if($result){
		echo"<br>";
		echo"$FirstName $LastName is now Registered for ID";
		}
		else {
		echo"This Resident is NOT Registered!".mysql_error();
	}
}
?>
</fieldset><br><br>
<fieldset style="max-width:68%;margin:2% 5% 4% 20%;"><br>
<legend>Write First Name Last Name or Id No to Search Payers</legend>
<form action="pay.php" method="GET">    
	<tr>
    <td height="38"><font color="black">Name / ID</font>
        <input type="search" name="text">
        <input type="submit" class="btn btn-info" value="Search" name="search"></td>
    </tr>	
</form>
</fieldset><br>
<fieldset style="max-width:68%;margin:2% 5% 4% 2%;"><br>
<legend align="center">Results of ID card Payer's in Adigrat Kebele</legend>
<?php
if(isset($_GET["search"])){
$conn = mysql_connect("localhost", "root", "");
mysql_select_db( "adigrat",$conn );
	$text=$_GET["text"];
	$sql=mysql_query("SELECT * FROM `pay` WHERE FirstName LIKE '$text%' OR LastName LIKE '$text%' OR IdNo LIKE '$text%'");
	echo mysql_error();
	echo"<table border='1' style='margin-left: 5px;'align='center'><tr style='background-color: silver;font-size: 15.5px;height: 30px;'><th>FName</th><th> LName</th><th>ID</th><th>Sex</th><th>DoB</th><th>Age</th><th>Nationality</th><th>PoB</th><th>Region</th><th>Zone</th><th>Wereda</th><th>Kebele</th><th>House No</th><th>Job</th><th>Date</th><th>Fee</th><th>Reason</th><th>Accountant</th><th>Photo</th></tr>";
	while($row=mysql_fetch_array($sql)){
	
	echo'<tr style="font-size: 13px;"><td>'.$row["FirstName"].'</td><td>'.$row["LastName"].'</td><td>'.$row["IdNo"].'</td><td>'.$row["Sex"].'</td><td>'.$row["dob"].'</td><td>'.$row["Age"].'</td><td>'.$row["Nationality"].'</td><td>'.$row["PlaceOfBirth"].'</td><td>'.$row["Region"].'</td><td>'.$row["Zone"].'</td><td>'.$row["Wereda"].'</td><td>'.$row["Kebele"].'</td><td>'.$row["HouseNo"].'</td><td>'.$row["Job"].'</td><td>'.$row["dog"].'</td><td>'.$row["Amount"].'</td><td>'.$row["Reason"].'</td><td>'.$row["Accountant"].'</td>';
	?>
	<td><div align="left"><img src="<?php echo $row["image_name"];?>" width="100" height="80px"/></div></td></tr>
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
</fieldset><br>
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
  
  <div id="footer_container">
    <div id="footer">
	  <p> © Kebele, Adigrat, Ethiopia</p>
    </div><!--close footer-->  
  </div><!--close footer_container--> 	
  
</body>
</html>
