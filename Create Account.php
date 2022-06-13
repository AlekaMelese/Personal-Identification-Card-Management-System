<?php
session_start();
if(!isset($_SESSION['username']))
		{
			header('Location: index.php');			
		}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>User Management System (Tom Cameron for NetTuts)</title>
<link rel="stylesheet" href="style.css" type="text/css" />
 <style>

</style>
<head>
  <title>kebele home page</title>
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
		<li><a href="Create Account.php">CreateAccount</a></li>
		  
		  <li><a href="id.php">Print IDCard</a></li>	
		  <div class="dropdown">
  <button class="dropbtn"> Search &#9662;</button>
  <div class="dropdown-content">   
   <a href="Searching_residentA.php">ID Recived Resident </a>
    <a href="Searching_residentIDUnRecivedA.php">ID UnRecived Resident </a>
	
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
    <a href="change password.php">Change Password </a>
    <a href="ViewFeedBack.php">View FeedBack </a>
	<a href="logout.php">Log Out </a>
  </div>
  
</div>
		  
		    
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->	
	
	<div id="site_content">	

	  <div class="sidebar_container">       
		<div class="sidebar"><br><br>
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
       </div><!--close sidebar_container-->	<br>	
	   

</body>
<fieldset style="max-width:80%;margin:2% 5% 4% 20%;">
<legend align="center"> <b> Create Account:</b></legend> 
<body>  
<div id="main">


	  <!-- <h1>Create Account</h1>-->
     
   <p><u><b>Please enter your details below to Create Account:-</b></u></p>
     
    <form method="post" action="Create Account.php" name="registerform" id="registerform" >

        <table  border="0" >
	
	 <?php
	 $FirstName=$Fathername=$GrandFatherName=$Sex=$Email=$PhoneNumber=$Status=$DateofRegister=
			$username=$password=$ConfirmPassword=$ID=$Role=$FirstNameE=$FathernameE=$GrandFatherNameE=$SexE=$EmailE=$PhoneNumberE=$StatusE=$DateofRegisterE=$usernameE=$passwordE=$ConfirmPasswordE=$IDE=$RoleE="";
			$CheckOk=1;
if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if(empty($_POST["FirstName"])) 
				{
					$FirstNameE="FirstName is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["FirstName"])){
						$FirstNameE = "Please  Enter only Characters!";
					}else{
						$FirstName= $_POST["FirstName"];
					}
				}
												
				if(empty($_POST["FatherName"])) 
				{
					$FathernameE="FatherName is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["FatherName"])){
						$FathernameE = "Please  Enter only Characters!";
					}else{
						$FatherName= $_POST["FatherName"];
					}
				}	
				if(empty(trim($_POST["GrandFatherName"])) )
				{
					$GrandFatherNameE="Granf Father Name is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["GrandFatherName"])){
						$GrandFatherNameE = "Please  Enter only Characters!";
					}else{
						$GrandFatherName= trim($_POST["GrandFatherName"]);
					}
				}
				if(empty(trim($_POST["Email"])))
				{
					$EmailE="Email is required";
				}else if(!preg_match("/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/",trim($_POST["Email"]))){
						$EmailE = "Please Enter a Valid Email";
						$CheckOk=0;
					}else{
						$Email= trim($_POST["Email"]);
					}
												
				if(empty(trim($_POST["PhoneNumber"])))
					{
					$PhoneNumberE="PhoneNumber is required";
					
					
				}else if(!preg_match("/^[0][0-9]{9}|^[+251][0-9]{13}/",trim($_POST["PhoneNumber"]))){
						$PhoneNumberE = "Please Enter a Valid Numeric PhoneNumber";
						
				} else if(strlen($PhoneNumber) < 10 || strlen($PhoneNumber) > 13) {
        	         $PhoneNumberE = "Phone Number must be 10 or 13 Degit Number only!!!";
				      } 
					else{
						$PhoneNumber= $_POST["PhoneNumber"];
				}
				
				if(empty(trim($_POST["username"])) )  
				{
					$usernameE="Username is required";
				}else{
					if(!preg_match(" /^[0-9a-zA-Z]+$/",$_POST["username"])){
						$usernameE = "Please Enter a Valid Username";
					}else{
						$username= trim($_POST["username"]);
					}
				}	

if(empty(trim($_POST["password"])) )
				{
					$passwordE="Password is required";
				}
					else if(!preg_match("/^[a-zA-Z|0-9|*|#|.|?|!|@|%|&|-]+$/",$_POST["password"])){
						$passwordE = "Letters, number and Special character are allowed(it is invalid)";
					}
					elseif(strlen($_POST["password"]) < 4 || strlen($_POST["password"]) >20){
        $passwordE = "Password must have at least 6 characters.";
		
					}
					
					else{
						$password= $_POST["password"];
					}
								
		if(empty($_POST["ConfirmPassword"]))
				{
					$ConfirmPasswordE="Confirm Password is required";
				}
			else if($password != $ConfirmPassword){
					//	if($_POST['password'] != $_POST['ConfirmPassword']){
						$ConfirmPasswordE = "Password is Not Mathed.";
						// echo "<script>alert('passwords doesn't match')</script>";
					}
					else{
						$ConfirmPassword= $_POST["ConfirmPassword"];
					}
			
				
					
			}
function test_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
		?>
	
	
	<form method="post" id="form-id" novalidate action="<?php echo $_SERVER["PHP_SELF"];?>">	
     
 <tr><td>First Name:</td>
		  <td><input name="FirstName"  type="text" id="FirstName"  placeholder="" 
		  value="<?php echo $FirstNameE;?>"> <span class="message" style="color:red;">*<?php echo $FirstNameE; ?></span></td></tr>
		
         <tr><td>Middle Name:</td>
		 <td><input name="FatherName" type="text" id="FatherName"  placeholder="" required> <span class="message" style="color:red;">*<?php echo $FathernameE; ?></span></td></tr>
		  <tr><td>Last Name:</td>
		 <td><input name="GrandFatherName" type="text" id="GrandFatherName"  placeholder="" > <span class="message" style="color:red;">*<?php echo $GrandFatherNameE; ?></span></td></tr>
		  <tr><td>Sex:</td> <td>
	<input type="radio" checked name="gender" <?php if (isset($Sex) && $Sex=="Male") echo "checked";?>
		value="Male">Male	
 <input type="radio" name="gender"  
 <?php if (isset($Sex) && $Sex=="Female") echo "checked";?>  value="Female">Female
		  <span class="message"style="color:red;"><?php echo $SexE; ?></span>
		  </td></tr>
		  <tr><td>Email:</td>
		 <td><input name="Email" type="text" id="Email"  placeholder="" required> <span class="message" style="color:red;">*<?php echo $EmailE; ?></span></td></tr>
		 
		  <tr><td>PhoneNumber:</td>
		 <td><input name="PhoneNumber" type="text" id="PhoneNumber"  placeholder="" required> <span class="message" style="color:red;">*<?php echo $PhoneNumberE; ?></span></td></tr>
		 
		  <tr><td>Status:</td><td>
		 <input type="radio" name="Status" id="Active" value="Active"checked="true">Active
		  <input type="radio" name="Status" id="NotActive" value="NotActive" >NotActive
		  <span class="message"style="color:red;"><?php echo $StatusE; ?></span>
		  </td></tr>
		 
		 
		 
<tr><td>UserName:</td>
		  <td><input name="username"  type="text" id="username"  Required="True"   placeholder="" > <span class="message" style="color:red;">*<?php echo $usernameE; ?></span></td></tr>
		
         <tr><td>Password:</td>
		 <td><input name="password"  type="password" id="password"  Required="True"   placeholder="" required> <span class="message" style="color:red;">*<?php echo $passwordE; ?></span></td></tr>
		   <tr><td>Verify Password:</td>
		  <td><input name="Confirmpassword:"  type="password" id="Confirmpassword"  Required="True"   placeholder="" required> <span class="message"style="color:red;">*<?php echo $ConfirmPasswordE; ?></span></td></tr>
     
		<tr><td>Role:</td> 
		  <td style="font size:12pt;"><select name="Role" type="text" id="Role">
		  <option selected="" value="">Please Select UserType </option>	
		  <option>DataClerk</option>
		  <option>Admin</option></select>
		  <span class="message"style="color:red;"><?php echo $RoleE; ?></span>
          </td></tr>
		
		 <tr><td></td><td>
        <input type="submit" name="Submit" formnovalidate name="Create Account" class="btn btn-success" id="Create Account" value="Create Account" />
		<button type="button"class="btn btn-danger" onclick="history.back();">Back</button>
		</td></tr>
		
		</table>
    </fieldset>
    </form>
     <?php

//$bd = @mysqli_connect('localhost', 'root',' ') 
//or die("Could not connect database");

$dbhost= 'localhost';
$dbuser= 'root';
$dbpass= '';
$database= 'picms';
$conn= mysqli_connect($dbhost,$dbuser, $dbpass,$database);
if(!$conn)
{ 
die('Could not connect: ' . mysqli_error());
}
//echo 'Connected successfully <br/>';

if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
//return $conn;
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $user=@$_POST['username'];
    $pass=md5($_POST['password']);
	$aa=@$_POST['Role'];
    $FirstName=@$_POST['FirstName'];
    $LastName=@$_POST['FatherName'];
	 $GrandFatherNameName=@$_POST['GrandFatherName'];
	  $Sex=@$_POST['Sex'];
	   $Email=@$_POST['Email'];
	    $PhoneNumber=@$_POST['PhoneNumber'];
		 $Status=@$_POST['Status'];
		  $dor=date("Y").'-'.date("m").'-'.date("d");
		  // $dor=@$_POST['DateofRegistration'];
    //$checkusername = "select * from login where username='$user' and password='$pass' ";
	$checkusername = "SELECT username FROM login where username='".$user."'   ";
	$result = mysqli_query($conn, $checkusername);
         $numrows = mysqli_num_rows($result);
  if($numrows >0){
       echo "<span  color='red'> Sorry, that username is taken. Please go back and try again. </span>";
	   
     }
	 $sql = "SELECT Email FROM login where Email='".$Email."'   ";
	$r = mysqli_query($conn, $sql);
         $numrows = mysqli_num_rows($r);
  if($numrows >0){
       echo "<span  color='red'>Sorry, that Email is taken. Please go back and try again.</span>";
	   
     }
	 $sql = "SELECT PhoneNumber FROM login where PhoneNumber='".$PhoneNumber."'   ";
	$rr = mysqli_query($conn, $sql);
         $numrows = mysqli_num_rows($rr);
   if($numrows >0){
       echo "<span  color='red'>Sorry, that PhoneNumber is taken. Please go back and try again.</span>";
	   
     }
     else 
     {
     $sql = "insert into login(FirstName,FatherName,GrandFatherName,Sex,Email,PhoneNumber,Status,
	DateofRegistration,username, password,Role)
	 VALUES('".$FirstName."','".$LastName."','".$GrandFatherNameName."','".$Sex."','".$Email."',
	 '".$PhoneNumber."','".$Status."','".$dor."','".$user."', '".$pass."','".$aa."')";
		if (mysqli_query($conn, $sql)) 
	
        {
           // echo "<h1>Success</h1>";
            echo "<p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>";
        }
        else
        {
            //echo "<h1>Error</h1>";
          
		 //echo "<p>Sorry, your registration failed. Please go back and try again.</p>";  
		  echo  mysqli_error($conn);
		  
        }       
     }
	 
}
   ?>
  <fieldset style="max-width:50%; margin:0% 0% 0% 10%;">
<legend align="center"><b>List of Internal workers:</b></legend>
<?php
//if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,'picms');
//if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");

	//$text=$_GET["text1"];
	$sql=mysqli_query($conn,"SELECT * FROM `login`  ");
	echo mysqli_error($conn);
	echo"<table border='1' style='margin-left: 10px;'align='center'><tr style='background-color: silver;font-size: 15.5px;height: 30px;'><th>ID</th><th>FName</th><th> LName</th><th>GFName</th><th>Email</th><th>PhonNumber</th><th>Status</th><th>Role</th><th>Delete</th><th>Edit</th</tr>";
	while($row=mysqli_fetch_array($sql)){	
	$id = $row['ID'];	
		 //echo'<tr style="font-size: 13px;"><td>'.$row["ID"].'</td><td>'.$row["FirstName"].'</td><td>'.$row["FatherName"].'</td><td>'.$row["GrandFatherName"].'</td><td>'.$row["Email"].'</td><td>'.$row["PhonNumber"].'</td><td>'.$row["status"].'</td><td>'.$row["Role"].'</td></tr>';
		 echo'<tr style="font-size: 13px;"><td>'.$row["ID"].'</td><td>'.$row["FirstName"].'</td><td>'.$row["FatherName"].'</td><td>'.$row["GrandFatherName"].'</td><td>'.$row["Email"].'</td><td>'.$row["PhoneNumber"].'</td><td>'.$row["Status"].'</td><td>'.$row["Role"].'</td>';
		//echo "<tr align='center'>";	
		echo"<td><a href ='DeleteAccount.php?ID=$id'>Delete</a>";
		echo"<td><a href ='AccountUpdate.php?ID=$id'>Update</a>";
		echo "</tr>";
		?>
		
		 <?php
	}
	$aa=mysqli_num_rows($sql);
	if($aa>0){
	echo " The Search matches and fetches the following result";
	}
else{
	echo " The search did not match";
}	
		
	echo"</table>";	
?>
</fieldset> 
 
</div><!--close site_content--> 
  </div><!--close main-->
  <div id="footer_container"> 
    <div id="footer">
	<p>&copy All Right Reserved</p>
    </div><!--close footer-->  
  </div><!--close footer_container--> 	
</body>
</html>